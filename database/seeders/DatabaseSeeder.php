<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $user = User::factory()->create([
            'username' => 'diane',
            'email' => 'diane@example.com',
        ]);

        $this->call([
            ContentSeeder::class,
            RoleSeeder::class
        ]);
        // User::factory(10)->create();

        $user->assignRole('Super Admin');

        $user = User::factory()->create([
            'username' => 'testadmin',
            'email' => 'testadmin@example.com',
        ]);

        $user->assignRole('Admin');

        $user = User::factory()->create([
            'username' => 'testuser',
            'email' => 'testuser@example.com',
        ]);

        $user->assignRole('User');

        // Call other seeders
    }
}
