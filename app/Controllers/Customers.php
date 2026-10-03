<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index(): string
    {
        $customers = [
            ['full_name' => 'Maria Santos', 'email' => 'maria.santos@example.com', 'phone' => '+63 917 555 0101'],
            ['full_name' => 'James Carter', 'email' => 'james.carter@example.com', 'phone' => '+63 918 555 0102'],
            ['full_name' => 'Aisha Rahman', 'email' => 'aisha.rahman@example.com', 'phone' => '+63 919 555 0103'],
            ['full_name' => 'Daniel Lee', 'email' => 'daniel.lee@example.com', 'phone' => '+63 920 555 0104'],
            ['full_name' => 'Sofia Garcia', 'email' => 'sofia.garcia@example.com', 'phone' => '+63 921 555 0105'],
        ];

        return view('customers/index', ['customers' => $customers]);
    }
}
