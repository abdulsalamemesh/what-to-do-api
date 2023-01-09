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
        $cost = ['free', '$', '$$', '$$$'];
        return [
            'task'     => [
                'en-US' => $this->faker->sentence(),
                'de'    => $this->faker->sentence(),
                'es'    => $this->faker->sentence(),
                'fr'    => $this->faker->sentence(),
                'it'    => $this->faker->sentence(),
                'ru'    => $this->faker->sentence(),
                'tr'    => $this->faker->sentence(),
                'uk'    => $this->faker->sentence(),
            ],
            'category' => $this->faker->randomElement(CategoriesEnum::values()),
            'person'   => $this->faker->numberBetween(1, 10),
            'cost'     => $this->faker->randomElement($cost),
            'links'    => [
                'en-US' => $this->faker->boolean() ? $this->faker->url() : '',
                'de'    => $this->faker->boolean() ? $this->faker->url() : '',
                'es'    => $this->faker->boolean() ? $this->faker->url() : '',
                'fr'    => $this->faker->boolean() ? $this->faker->url() : '',
                'it'    => $this->faker->boolean() ? $this->faker->url() : '',
                'ru'    => $this->faker->boolean() ? $this->faker->url() : '',
                'tr'    => $this->faker->boolean() ? $this->faker->url() : '',
                'uk'    => $this->faker->boolean() ? $this->faker->url() : '',
            ],

        ];
    }
}
