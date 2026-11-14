<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PosReferenceSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('customers')->insert([
            ['name' => 'Maria Santos', 'email' => 'maria.santos@example.com', 'phone' => '0917 123 4567', 'status' => 'Active', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'John Reyes', 'email' => 'john.reyes@example.com', 'phone' => '0918 234 5678', 'status' => 'Active', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Angela Cruz', 'email' => 'angela.cruz@example.com', 'phone' => '0919 345 6789', 'status' => 'Inactive', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Paolo Garcia', 'email' => 'paolo.garcia@example.com', 'phone' => '0920 456 7890', 'status' => 'Active', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Sofia Flores', 'email' => 'sofia.flores@example.com', 'phone' => '0921 567 8901', 'status' => 'Active', 'created_at' => now(), 'updated_at' => now()],
        ]);

        DB::table('pos_users')->insert([
            ['name' => 'Admin User', 'email' => 'admin@pos.test', 'role' => 'Administrator', 'status' => 'Active', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Liza Mendoza', 'email' => 'liza.mendoza@pos.test', 'role' => 'Cashier', 'status' => 'Active', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Carlo Navarro', 'email' => 'carlo.navarro@pos.test', 'role' => 'Manager', 'status' => 'Active', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Nina Torres', 'email' => 'nina.torres@pos.test', 'role' => 'Cashier', 'status' => 'Inactive', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Ben Aquino', 'email' => 'ben.aquino@pos.test', 'role' => 'Inventory Clerk', 'status' => 'Active', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
