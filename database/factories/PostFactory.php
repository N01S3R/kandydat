<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->unique()->randomDigit(),
            'title' => $this->faker->sentence(),
            'content' => $this->faker->text($maxNbChars = 100),
        ];
    }
}
