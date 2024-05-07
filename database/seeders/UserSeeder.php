<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'fullname' => 'Admin',
            'username' => 'Admin',
            'no_hp' => env('NO_HP', null),
            'email' => 'admin@admin.com',
            'password' => Hash::make('password'),
        ]);
    }
}
