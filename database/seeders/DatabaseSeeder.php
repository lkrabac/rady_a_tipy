<?php

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Faker\Factory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory(15)->create()->each(function ($user) {
            for($i = 0; $i < 5; $i++) {
            $user->posts()->save(\App\Models\Post::factory()->create());
            $user->comments()->save(\App\Models\Comment::factory()->create());
            }
        });

        // \App\Models\Post::factory(15)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

    }
}
