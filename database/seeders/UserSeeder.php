<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        User::create([
            'name' => 'Administrator',
            'level' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin123'),
            'remember_token' => Str::random(60)
        ]);
        User::create([
            'name' => 'Creator',
            'level' => 'creator',
            'email' => 'creator@creator.com',
            'password' => Hash::make('creator123'),
            'remember_token' => Str::random(60)
        ]);
    }
}
