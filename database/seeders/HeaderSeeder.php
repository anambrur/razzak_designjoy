<?php

namespace Database\Seeders;

use App\Models\Header;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HeaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Header::create(['logo'=>'asset/fontend/svg/logo.svg','title'=>'A design agency with a twist','secondary_title'=>'Design subscriptions for everyone. Pause or cancel anytime.']);
    }
}
