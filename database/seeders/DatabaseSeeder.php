<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        DB::table('admins')->insert([
            [
                'username' => 'admin',
                'password' => Hash::make('password123'),
            ],
        ]);

        DB::table('reservations')->insert([
            [
                'name' => 'adadadadada',
                'contact_number' => '09173940164',
                'reservation_from' => '2025-04-04',
                'reservation_to' => '2025-04-08',
                'room_type' => 'Deluxe',
                'room_capacity' => 'Family',
                'payment_type' => 'Cheque',
            ],
            [
                'name' => 'VILLENA, LANSERINNO',
                'contact_number' => '09173940163',
                'reservation_from' => '2025-04-09',
                'reservation_to' => '2025-04-11',
                'room_type' => 'Deluxe',
                'room_capacity' => 'Single',
                'payment_type' => 'Cheque',
            ],
        ]);
    }
}
