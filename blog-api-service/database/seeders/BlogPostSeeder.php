<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BlogPost;
use Faker\Factory as Faker;

class BlogPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $post = \App\Models\BlogPost::factory(20)->create();
        $faker = Faker::create();
        $post = new BlogPost;
        for ($i = 0; $i < 10; $i++){
            
            $post->insert([
                'title' => $faker->sentence(5),
                'slug' => $faker->unique()->word,
                'description' => $faker->paragraph(rand(2, 6)),
                'post_id' => rand(2, 6),
                'status' => 'active',
            ]);
        }
    }
}
