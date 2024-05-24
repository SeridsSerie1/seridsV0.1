<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Juan',
            'email' => 'juan@example.com',
            'password' => bcrypt('password123'),
        ]);

        User::create([
            'name' => 'marian',
            'email' => 'marian@example.com',
            'password' => bcrypt('password123dsf'),
        ]);

        User::create([
            'name' => 'Jonathan',
            'email' => 'jonathan@example.com',
            'password' => bcrypt('safas85'),
        ]);

        User::create([
            'name' => 'sofia',
            'email' => 'sofia@example.com',
            'password' => bcrypt('pafs23'),
        ]);
    }
}
