<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Timur',
            'email' => 'Timur@mail.ru',
            'password' => Hash::make('timur')
        ]);
        User::factory()->create([
            'name' => 'Ivan',
            'email' => 'Ivan@mail.ru',
            'password' => Hash::make('ivan')
        ]);
        User::factory()->create([
            'name' => 'Olga',
            'email' => 'Olga@mail.ru',
            'password' => Hash::make('olga')
        ]);
    }
}
