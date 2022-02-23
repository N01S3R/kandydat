<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_name' => $this->faker->unique()->name(),
            'post_id' => $this->faker->randomDigit(),
            'content' => $this->faker->text($maxNbChars = 100),
        ];
    }
}
