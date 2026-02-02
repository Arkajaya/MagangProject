<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
<<<<<<< HEAD
=======
use Database\Seeders\RolePermissionSeeder;
use App\Models\Category;
use App\Models\Product;

>>>>>>> 7d9d45dfcba230a0ad93876e8388159984352ab0

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
<<<<<<< HEAD
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
=======
        // Category::factory(5)->create();
        // Product::factory(20)->create();

        $this->call(RolePermissionSeeder::class);

        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
>>>>>>> 7d9d45dfcba230a0ad93876e8388159984352ab0
    }
}
