<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\App;
use function Pest\Laravel\call;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        \Laravel\Prompts\info('Seeding admin user');
        // seed admin
        $admin = User::factory()->create([
            'name' => config('app.admin.username'),
            'email' => config('app.admin.email'),
            'password' => bcrypt(config('app.admin.password')),
        ]);

        // update admin role
        $admin->role = 'A';
        $admin->save();

        when(!App::isProduction(), function () use ($admin) {
            \Laravel\Prompts\info('Seeding Users...');
            User::factory(1)->create();

            \Laravel\Prompts\info('Seeding Blog Posts...');
            $this->call(BlogSeeder::class,false, ['admin' => $admin]);
        });

        \Laravel\Prompts\info('Database Seeding Complete.');
    }
}
