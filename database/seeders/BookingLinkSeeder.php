<?php

namespace Database\Seeders;

use App\Models\BookingLink;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookingLinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BookingLink::create(['booking_link'=>'https://tidycal.com/sarkeribrahim/15-minute-meeting']);
    }
}
