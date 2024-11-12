<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // dummy data for local testing
        if (config('app.env') == 'local') {
            \Laravel\Prompts\info('App is in local environment. Seeding database...');

            // admin user
            \Laravel\Prompts\info('Seeding admin.');

            $adminUser = User::factory()->create([
                'name' => config('app.admin.name'),
                'email' => config('app.admin.email'),
                'password' => Hash::make(config('app.admin.password')),
            ]);

            $adminUser->role = 'A';
            $adminUser->save();

            \Laravel\Prompts\info('Admin seeded.');

            // seed posts with relations
            \Laravel\Prompts\info('Seeding posts.');

            // create 100 posts
            $categoryNames = ['Technology', 'Tutorials', 'Education', 'Business', 'Growth', 'Story', 'Copywriting'];

            Arr::map($categoryNames, fn($category) => Category::factory()
                ->has(
                    Post::factory(5)
                        ->hasAttached(Tag::factory(2))
                        ->for($adminUser)
                        ->has(Comment::factory(2))
                        ->state(['author' => $adminUser->name])
                )
                ->create([
                    'title' => $category,
                    'slug' => Str::slug($category)
                ])
            );


            \Laravel\Prompts\info('Posts seeded.');
        } else {
            // production environment seeding goes here
            //...
        }
    }
}
