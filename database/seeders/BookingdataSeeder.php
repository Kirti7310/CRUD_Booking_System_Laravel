<?php

namespace Database\Seeders;
use App\Models\Booking;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookingdataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Booking::create(
            [
                'customer_name'=>'kirti',
                'email'=>'kirti@coderelix.com',
                'phone'=>'9898789898',
                'booking_date'=>'2025-06-13',
                'notes'=>'newbook',
            ]);

        Booking::create(
            [
                'customer_name'=>'Laksh',
                'email'=>'laksh@coderelix.com',
                'phone'=>'9898789898',
                'booking_date'=>'2025-06-14',
                'notes'=>'newbook',

            ]);
        //
    }
}
