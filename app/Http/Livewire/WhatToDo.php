<?php

namespace App\Http\Livewire;

use App\Enums\CategoriesEnum;
use App\Models\Task;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;

class WhatToDo extends Component
{
    public $task;
    public array $categories;
    public array $persons;
    public array $costs = ['free', '$', '$$', '$$$'];
    public array $selectedCosts = ['free'];
    public array $selectedPersons = [1];
    public array $selectedCategories = ['staying busy'];

    public function mount()
    {
        $this->task = Task::query()->where(function (Builder $eloquentBuilder) {
            $eloquentBuilder->whereIn('cost', $this->selectedCosts)
                ->whereIn('person', $this->selectedPersons)
                ->whereIn('category', $this->selectedCategories);
        })->inRandomOrder()->first();
        $this->categories = CategoriesEnum::values();
        $this->persons = array_values(Task::query()->pluck('person')->unique()->toArray());
        sort($this->persons);
    }

    public function render()
    {
        return view('livewire.what-to-do');
    }

    public function getTask()
    {
        $this->task = Task::query()->where(function (Builder $eloquentBuilder) {
            if ($this->selectedCosts) {
                $eloquentBuilder->whereIn('cost', $this->selectedCosts);
            }
            if ($this->selectedPersons) {
                $eloquentBuilder->whereIn('person', $this->selectedPersons);
            }
            if ($this->selectedCategories) {
                $eloquentBuilder->whereIn('category', $this->selectedCategories);
            }
        })->inRandomOrder()->first();
    }
}
