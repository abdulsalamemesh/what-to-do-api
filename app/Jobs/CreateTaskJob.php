<?php

namespace App\Jobs;

use App\Models\Task;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Arr;

class CreateTaskJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public array $supportedLanguages = ['en-US', 'de', 'es', 'fr', 'it', 'ru', 'tr', 'uk',];

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(public array $data)
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $translations = [];
        $translator = new \DeepL\Translator(env('DEEPL_API_KEY'));

        foreach ($this->supportedLanguages as $supportedLanguage) {
            if ($supportedLanguage == Arr::get($this->data, 'textLanguage')) {
                $translations[$supportedLanguage] = Arr::get($this->data, 'task');
                continue;
            }
            $translations[$supportedLanguage] = $translator->translateText(Arr::get($this->data, 'task'), Arr::get($this->data, 'textLanguage'), $supportedLanguage, in_array($supportedLanguage, ['de', 'es', 'fr', 'it']) ? ['formality' => 'less'] : [])->text;
        }
        Task::query()->create([
            'task'     => $translations,
            'category' => Arr::get($this->data, 'selectedCategory'),
            'person'   => Arr::get($this->data, 'selectedPerson'),
            'cost'     => Arr::get($this->data, 'selectedCost'),
            'links'    => Arr::get($this->data, 'resources'),
        ]);
    }
}
