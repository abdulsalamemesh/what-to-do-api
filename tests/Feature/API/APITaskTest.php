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
        $data = $response->collect();
        $this->assertTrue($data->has('identifier'));
        $this->assertTrue($data->has('task'));
        $this->assertTrue($data->has('category'));
        $this->assertTrue($data->has('person'));
        $this->assertTrue($data->has('cost'));
        $this->assertTrue($data->has('links'));
    }

    /** @test */
    public function it_returns_query_string_error()
    {
        Task::factory()->create();
        $response = $this->get(route('task', ['test' => 'sada', 'test1' => 'sada', 'test2' => 'sada']));
        $response->assertStatus(422);
        $this->assertTrue($response->collect()->has('error'));
        $this->assertTrue(Str::contains($response->collect()->get('error'), ['test', 'test1', 'test2']));
    }

    /** @test */
    public function it_returns_error_not_found()
    {
        Task::factory(['identifier' => '123456'])->create();
        $response = $this->get(route('task', ['identifier' => '123']));
        $response->assertStatus(404);
        $this->assertTrue($response->collect()->has('error'));
        $this->assertTrue(Str::contains($response->collect()->get('error'), 'No task found with the specified parameters'));
    }

    /** @test */
    public function it_gets_an_error_of_unsupported_language()
    {
        Task::factory()->create();
        $response = $this->get(route('task', ['language' => 'tt']));
        $response->assertStatus(422);
        $this->assertTrue($response->collect()->has('error'));
        $this->assertTrue(Str::contains($response->collect()->get('error'), ['the selected language is unsupported']));

    }
    /** @test */
    public function it_gets_a_task_with_the_defined_language()
    {
        $task = Task::factory()->create();
        $response = $this->get(route('task', ['language' => 'de']));
        $this->assertEquals($task['task']['de'],$response->collect()->get('task'));
        $this->assertEquals($task['links']['de'],$response->collect()->get('links'));
        $this->assertIsString($response->collect()->get('task'));
        $this->assertIsString($response->collect()->get('links'));

    }

    /** @test */
    public function it_creates_a_new_task()
    {
        $data = [
            'language' => 'en-US',
            'task'     => 'plays football',
            'category' => 'fun',
            'person'   => 4,
            'cost'     => '$',
            'links'    => [
                'en-US' => 'https://www.google.com/',
                'de'    => 'https://www.google.com/?hl=de'
            ],
        ];
        $response = $this->post(route('task.create', $data));
        $responseData = $response->collect();
        $this->assertEquals($data['task'], $responseData['task'][$data['language']]);
        $this->assertEquals($data['category'], $responseData['category']);
        $this->assertEquals($data['person'], $responseData['person']);
        $this->assertEquals($data['cost'], $responseData['cost']);
        $this->assertEquals($data['links']['en-US'], $responseData['links']['en-US']);
        $this->assertEquals($data['links']['de'], $responseData['links']['de']);
    }

}
