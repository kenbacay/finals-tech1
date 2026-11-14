<?php

namespace App\Http\Controllers;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = [
            [
                'id' => 1,
                'name' => 'Maria Santos',
                'email' => 'maria@gmail.com',
                'phone' => '0917-123-4567',
                'status' => 'Active'
            ],
            [
                'id' => 2,
                'name' => 'Juan Dela Cruz',
                'email' => 'juan@gmail.com',
                'phone' => '0918-234-5678',
                'status' => 'Active'
            ],
            [
                'id' => 3,
                'name' => 'Angela Reyes',
                'email' => 'angela@gmail.com',
                'phone' => '0919-345-6789',
                'status' => 'Inactive'
            ],
            [
                'id' => 4,
                'name' => 'Paolo Garcia',
                'email' => 'paolo@gmail.com',
                'phone' => '0920-456-7890',
                'status' => 'Active'
            ],
            [
                'id' => 5,
                'name' => 'Sofia Mendoza',
                'email' => 'sofia@gmail.com',
                'phone' => '0921-567-8901',
                'status' => 'Active'
            ],
        ];

        return view('customers.index', compact('customers'));
    }
}