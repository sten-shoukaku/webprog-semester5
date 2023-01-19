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
            'price' => $this->faker->numberBetween(100000, 10000000),
            'date' => $this->faker->date('Y-m-d'),
            'time' => $this->faker->time('H:i'),
            'duration' => $this->faker->numberBetween(1, 3),
            'venue' => $this->faker->words(3, True),
            'location' => $this->faker->word()
        ];
    }
}
