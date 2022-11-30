<?php

namespace App\Http\Livewire;

use App\Enums\CategoriesEnum;
use App\Models\Task;
use Livewire\Component;

class WhatToDo extends Component
{
    public $task;
    public array $categories;
    public array $persons;
    public array $costs = ['free', '$', '$$', '$$$'];
    public array $selectedCosts = ['free'];

    public function mount()
    {
        $this->task = Task::inRandomOrder()->first();
        $this->categories = CategoriesEnum::values();
        $this->persons = Task::query()->pluck('person')->unique()->toArray();
    }

    public function render()
    {
//        dd($this->categories);
        return view('livewire.what-to-do');
    }

    public function getTask()
    {
        $this->task = Task::inRandomOrder()->first();
    }
}
