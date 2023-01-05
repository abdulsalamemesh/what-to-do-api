<?php

namespace Database\Factories;

use App\Enums\CategoriesEnum;
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
        $cost = [null, '$', '$$', '$$$'];
        return [
            'task'     => $this->faker->sentence(),
            'category' => $this->faker->randomElement(CategoriesEnum::values()),
            'person'    => $this->faker->numberBetween(1, 10),
            'cost'     => $this->faker->randomElement($cost),
            'links'     => $this->faker->boolean() ? $this->faker->url() : null,
        ];
    }
}
