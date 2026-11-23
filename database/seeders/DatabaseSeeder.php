<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $users = [
            [
                'username' => 'kenbacay',
                'full_name' => 'Ken Bacay',
                'email' => 'kenbacay@gmail.com',
            ],
            [
                'username' => 'admin01',
                'full_name' => 'John Admin',
                'email' => 'john.admin@example.com',
            ],
            [
                'username' => 'cashier01',
                'full_name' => 'Maria Lopez',
                'email' => 'maria.lopez@example.com',
            ],
            [
                'username' => 'staff01',
                'full_name' => 'Daniel Cruz',
                'email' => 'daniel.cruz@example.com',
            ],
            [
                'username' => 'manager01',
                'full_name' => 'Sofia Reyes',
                'email' => 'sofia.reyes@example.com',
            ],
        ];

        foreach ($users as $user) {
            User::firstOrCreate(
                ['username' => $user['username']],
                [
                    'full_name' => $user['full_name'],
                    'email' => $user['email'],
                ]
            );
        }
    }
}