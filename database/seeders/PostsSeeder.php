<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        Post::create([
            'user_id' => $faker->name(),
            'title' => $faker->name(),
            'content' => $faker->name(),
        ]);
    }
}
