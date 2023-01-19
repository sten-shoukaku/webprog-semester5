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
            'price' => $this->faker->numberBetween(100000, 10000000),
            'date' => $this->faker->date('Y-m-d'),
            'location' => $this->faker->word()
        ];
    }
}
