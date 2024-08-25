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
            'bio' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
            'email' => 'testuser@example.com',
        ]);

        $user->assignRole('User');

        // Call other seeders
    }
}
