<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $cost = ['$', '$$', '$$$'];
        return [
            'identifier'    => $this->faker->uuid(),
            'task'          => $this->faker->sentence(),
            'category'      => $this->faker->word(),
            'count'         => $this->faker->numberBetween(1, 10),
            'cost'          => $this->faker->randomElement($cost),
            'accessibility' => $this->faker->randomElement([1, 2, 3]),
            'link'          => $this->faker->boolean() ? $this->faker->url() : null,
        ];
    }
}
