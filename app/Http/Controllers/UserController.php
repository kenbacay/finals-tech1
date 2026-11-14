<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function index()
    {
        $users = [
            [
                'id' => 1,
                'name' => 'Ken Bacay',
                'email' => 'ken@gmail.com',
                'role' => 'Administrator',
                'status' => 'Active'
            ],
            [
                'id' => 2,
                'name' => 'Leah Torres',
                'email' => 'leah@gmail.com',
                'role' => 'Cashier',
                'status' => 'Active'
            ],
            [
                'id' => 3,
                'name' => 'Mark Villanueva',
                'email' => 'mark@gmail.com',
                'role' => 'Cashier',
                'status' => 'Active'
            ],
            [
                'id' => 4,
                'name' => 'Nina Flores',
                'email' => 'nina@gmail.com',
                'role' => 'Manager',
                'status' => 'Active'
            ],
            [
                'id' => 5,
                'name' => 'Oliver Cruz',
                'email' => 'oliver@gmail.com',
                'role' => 'Staff',
                'status' => 'Inactive'
            ],
        ];

        return view('users.index', compact('users'));
    }
}