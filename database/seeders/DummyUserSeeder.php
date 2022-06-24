<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DummyUserSeeder extends Seeder
{
    public function run()
    {
        User::firstOrCreate(
            ['name' => 'user'],
            [
                'email' => 'user@email.com',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'remember_token' => Str::random(10),
                'avatar' => 'users/default.png',
                'role_id' => 1,
            ]
        );
    }
}
