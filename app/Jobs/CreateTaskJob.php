<?php

namespace App\Jobs;

use App\Models\Language;
use App\Models\Task;
use App\Service\TranslatorService;
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

        $translations = TranslatorService::translate(Arr::get($this->data, 'task'), Arr::get($this->data, 'textLanguage'));

        Task::query()->create([
            'task'     => $translations,
            'category' => Arr::get($this->data, 'selectedCategory'),
            'person'   => Arr::get($this->data, 'selectedPerson'),
            'cost'     => Arr::get($this->data, 'selectedCost'),
            'links'    => Arr::get($this->data, 'resources'),
        ]);
    }
}
