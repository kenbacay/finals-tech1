<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $users = [
            ['username' => 'kenbacay', 'full_name' => 'Ken Bacay'],
            ['username' => 'admin01', 'full_name' => 'John Admin'],
            ['username' => 'cashier01', 'full_name' => 'Maria Lopez'],
            ['username' => 'staff01', 'full_name' => 'Daniel Cruz'],
            ['username' => 'manager01', 'full_name' => 'Sofia Reyes'],
        ];

        foreach ($users as $user) {
            User::firstOrCreate(
                ['username' => $user['username']],
                ['full_name' => $user['full_name']]
            );
        }
    }
}