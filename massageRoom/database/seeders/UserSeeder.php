<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->count(3)->create();

        User::factory()->admin()->create([
            'name' => 'Vladimir',
            'surname' => 'Gadirca',
            'email' => 'admin@example.com',
            'password' => Hash::make('urs4111985'),
            'phone' => '+37367570992'
        ]);

        User::factory()->moderator()->create([
            'name' => 'Sergiu',
            'surname' => 'Spirin',
            'email' => 'ssspirin_86@inbox.ru',
            'password' => Hash::make('siddis86'),
            'phone' => '+37368628114'
        ]);
    }
}
