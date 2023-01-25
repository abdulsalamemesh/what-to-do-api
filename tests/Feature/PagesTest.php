<?php

namespace Tests\Feature;

use App\Http\Livewire\Tasks\Create;
use App\Http\Livewire\WhatToDo;
use App\Jobs\CreateTaskJob;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Queue\Jobs\Job;
use Illuminate\Queue\Queue;
use Illuminate\Support\Facades\Bus;
use Livewire\Livewire;
use Tests\TestCase;

class PagesTest extends TestCase
{
    /** @test */
    public function it_returns_the_homepage()
    {
        $this->get(route('home'))->assertSeeLivewire(WhatToDo::class)->assertOk();
    }

    /** @test */
    public function livewire_in_homepage_filters_results()
    {
        Livewire::test(WhatToDo::class)
            ->set('selectedCosts', ['free'])
            ->set('selectedPersons', [1])
            ->set('selectedCategories', ['fun'])
            ->call('getTask')
            ->assertSet('selectedCosts', ['free'])
            ->assertSet('selectedPersons', [1])
            ->assertSet('selectedCategories', ['fun']);
    }

    /** @test */
    public function livewire_creates_a_task()
    {
        Bus::fake();
        Livewire::test(Create::class)
            ->set('taskDefaultLanguage', 'de')
            ->set('task', 'Guten Morgen')
            ->set('selectedCategory', 'fun')
            ->set('selectedPerson', 1)
            ->set('resources', [])
            ->call('submit');
        Bus::assertDispatched(CreateTaskJob::class);
    }

    /** @test */
    public function it_returns_the_contributions_page()
    {
        $this->get(route('tasks.create'))->assertOk();
    }

    /** @test */
    public function it_returns_the_documentation_page()
    {
        $this->get(route('tasks.create'))->assertOk();
    }

    /** @test */
    public function it_returns_the_about_page()
    {
        $this->get(route('about'))->assertOk();
    }
}
