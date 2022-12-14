<?php

namespace Tests\Feature\API;


use App\Models\Task;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Str;
use Tests\TestCase;

class APITaskTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_returns_data()
    {
        Task::factory()->create();
        $response = $this->get(route('task'));
        $response->assertOk();
        $data = collect(json_decode($response->getContent()));
        $this->assertTrue($data->has('identifier'));
        $this->assertTrue($data->has('task'));
        $this->assertTrue($data->has('category'));
        $this->assertTrue($data->has('person'));
        $this->assertTrue($data->has('cost'));
        $this->assertTrue($data->has('link'));
    }

    /** @test */
    public function it_returns_query_string_error()
    {
        Task::factory()->create();
        $response = $this->get(route('task', ['test' => 'sada', 'test1' => 'sada', 'test2' => 'sada']));
        $response->assertStatus(422);
        $this->assertTrue(collect(json_decode($response->getContent()))->has('error'));
        $this->assertTrue(Str::contains(collect(json_decode($response->getContent()))->get('error'), ['test', 'test1', 'test2']));
    }

    /** @test */
    public function it_returns_error_not_found()
    {
        Task::factory(['identifier' => '123456'])->create();
        $response = $this->get(route('task', ['identifier' => '123']));
        $response->assertStatus(404);
        $this->assertTrue(collect(json_decode($response->getContent()))->has('error'));
        $this->assertTrue(Str::contains(collect(json_decode($response->getContent()))->get('error'), 'No task found with the specified parameters'));
    }

}
