<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class BlogPostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            'title' => $this->faker->sentence(5),
            'slug' => $this->faker->unique()->word,
            'description' => $this->faker->paragraph(rand(2, 6)),
            'post_id' => rand(2, 6),
            'status' => 'active',
        ];
    }

}
