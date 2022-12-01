<?php

namespace App\Http\Livewire\Tasks;

use App\Enums\CategoriesEnum;
use App\Models\Task;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Livewire\Component;

class Create extends Component
{
    public string $task = '';
    public int $charsCount;
    public bool $overCharsCount = false;
    public array $categories;
    public array $costs = ['free', '$', '$$', '$$$'];
    public array $languages;
    public string $selectedCost = 'free';
    public string $selectedPerson = '1';
    public string $selectedCategory = 'staying busy';
    public string $selectedLanguage = 'en';
    public array $selectedResourceLanguages = ['en'];
    public array $resources = [];


    public function mount()
    {
        $this->categories = CategoriesEnum::values();
        $this->languages = [
            'en' => __('english'),
            'de' => __('german'),
        ];
        $this->charsCount = 280;
    }

    public function submit()
    {
        $validatedData = $this->validate(
            [
                'selectedCategory' => ['required', Rule::in($this->categories)],
                'selectedCost'     => ['required', Rule::in($this->costs)],
                'selectedPersons'  => ['required', Rule::in(range(1, 10))],
            ]
        );
        dd($validatedData);
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.tasks.create');
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
