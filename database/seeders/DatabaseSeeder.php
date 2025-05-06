<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Create default admin user
        DB::table('admins')->insert([
            'username' => 'admin',
            'password' => Hash::make('password123'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Add example reservations
        DB::table('reservations')->insert([
            [
                'name' => 'John Doe',
                'contact_number' => '09123456789',
                'reservation_from' => '2025-05-10',
                'reservation_to' => '2025-05-15',
                'room_type' => 'Deluxe',
                'room_capacity' => 'Double',
                'payment_type' => 'Credit',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
