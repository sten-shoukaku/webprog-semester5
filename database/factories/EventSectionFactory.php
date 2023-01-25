<?php

namespace Database\Factories;

use App\Models\Event;
use Illuminate\Database\Eloquent\Factories\Factory;

class EventSectionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $events = Event::all()->pluck('id')->toArray();

        return [
            'event_id' => $this->faker->randomElement($events),
            'name' => $this->faker->sentence(),
            'price' => $this->faker->numberBetween(1000000, 3000000),
            'stock' => $this->faker->numberBetween(0, 15)
        ];
    }
}
