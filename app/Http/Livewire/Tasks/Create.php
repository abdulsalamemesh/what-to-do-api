<?php

namespace App\Http\Livewire\Tasks;

use App\Enums\CategoriesEnum;
use App\Jobs\CreateTaskJob;
use App\Models\Language;
use App\Models\Task;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Livewire\Component;

class Create extends Component
{
    public string $task = '';
    public int $charsCount = 280;
    public bool $overCharsCount = false;
    public array $categories;
    public array $costs = ['free', '$', '$$', '$$$'];
    public string $selectedCost = 'free';
    public string $selectedPerson = '1';
    public string $selectedCategory = 'staying busy';
    public string $taskDefaultLanguage = 'en-US';
    public array $resources = Language::KEYS_AND_EMPTY_VALUES;


    public function mount()
    {
        $this->categories = CategoriesEnum::values();
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function render()
    {
        return view('livewire.tasks.create');
    }

    protected array $messages = [
        'resources.*' => 'The resource must be a valid URL. Example: https://www.google.com',
    ];

    public function rules(): array
    {
        return [
            'taskDefaultLanguage' => ['required', Rule::in(Language::KEYS)],
            'task'                => ['required', 'max:280', 'min:5'],
            'selectedCategory'    => ['required', Rule::in($this->categories)],
            'selectedCost'        => ['required', Rule::in($this->costs)],
            'selectedPerson'      => ['required', Rule::in(range(1, 10))],
            'resources.*'         => ['sometimes', 'url'],
        ];
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function submit()
    {
        $validatedData = $this->validate();
        CreateTaskJob::dispatch($validatedData);
        return to_route('home');
    }

    public function updatingTask($value)
    {
        if (280 - Str::length($value) < 0) {
            $this->overCharsCount = true;
            $this->charsCount = (280 - Str::length($value)) * -1;
        } else {
            $this->overCharsCount = false;
            $this->charsCount = 280 - Str::length($value);
        }

    }


}
