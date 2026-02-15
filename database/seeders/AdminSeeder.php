<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@bootcorp.com'],
            [
                'name'     => 'Admin',
                'username' => 'admin',
                'email'    => 'admin@bootcorp.com',
                'password' => 'password',
                'is_admin' => true,
            ]
        );
    }
}
