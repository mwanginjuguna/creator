<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // seed admin
        $admin = User::factory()->create([
            'name' => config('app.admin.username'),
            'email' => config('app.admin.email'),
            'password' => bcrypt(config('app.admin.password')),
        ]);

        // update admin role
        $admin->role = 'A';
        $admin->save();
    }
}
