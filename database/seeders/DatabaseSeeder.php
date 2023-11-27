<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Enums\UserRole;
use App\Models\Product;
use App\Models\User;
use Hash;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        Product::factory(50)->create();

        User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@mail.ru',
            'password' => Hash::make('12345678'),
            'role' => UserRole::ADMIN->value,
        ]);

        User::factory()->create([
            'name' => 'Simple User',
            'email' => 'user@mail.ru',
            'password' => Hash::make('12345678'),
            'role' => UserRole::USER->value,
        ]);
    }
}
