<?php

namespace Database\Factories;

use App\Models\Event;
use Illuminate\Database\Eloquent\Factories\Factory;

class EventFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Event::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->company(),
            'description' => $this->faker->name(),
            'image' => $this->faker->imageurl(640,480, null, false),  
            'capacity' => $this -> faker -> numberBetween($min = 5, $max = 30),
            'date' => $this -> faker -> dateTimeBetween('now', '+100 days'),
            

        ];
    }
}