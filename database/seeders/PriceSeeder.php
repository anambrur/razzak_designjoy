<?php

namespace Database\Seeders;

use App\Models\Price;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Price::create(['web_basic' => '5000', 'web_standard' => '1000', 'web_pro' => '1500', 'logo_basic' => '5000', 'logo_standard' => '1000', 'logo_pro' => '1500', 'marketing_basic' => '5000', 'marketing_standard' => '1000', 'marketing_pro' => '1500']);
    }
}
