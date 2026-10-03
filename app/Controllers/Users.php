<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index(): string
    {
        $users = [
            ['username' => 'mrivera', 'full_name' => 'Miguel Rivera', 'role' => 'Administrator'],
            ['username' => 'lchen', 'full_name' => 'Lena Chen', 'role' => 'Cashier'],
            ['username' => 'apatel', 'full_name' => 'Arjun Patel', 'role' => 'Cashier'],
            ['username' => 'jwilson', 'full_name' => 'Jordan Wilson', 'role' => 'Inventory Clerk'],
            ['username' => 'nreyes', 'full_name' => 'Nina Reyes', 'role' => 'Manager'],
        ];

        return view('users/index', ['users' => $users]);
    }
}
