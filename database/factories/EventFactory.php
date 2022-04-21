<?php

namespace Database\Factories;

use Illuminate\Support\Str;
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
        $title = $this->faker->sentence(rand(2,6));

        return [
            //
            'title' => $title,
            'slug' => Str::slug($title),
            'content' => $this->faker->sentence(rand(2,3)),
            'premium' => $this->faker->boolean(25),
            'start_at' => $this->faker->dateTimeBetween('now' , +'2months'),
            'end_at' => $this->faker->dateTimeBetween('+2months' ,'+4months' ),
        ];
    }
}
