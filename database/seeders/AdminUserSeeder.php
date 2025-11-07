<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (!User::where('email', 'krn@gmail.com')->exists()) {
            User::create([
                'name' => 'Admin User',
                'email' => 'krn@gmail.com',
                'password' => Hash::make('krn@123')
            ]);
        }
    }
}
