<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->words(3, True),
            'image' => 'images/event_template.png',
            'description' => $this->faker->sentence(),
            'date' => $this->faker->date('Y-m-d'),
            'open_hour' => $this->faker->sentence(),
            'location' => $this->faker->word(),
        ];
    }
}
