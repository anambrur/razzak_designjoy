<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use HasFactory;
    protected $fillable = [
        'web_basic',
        'web_standard',
        'web_pro',
        'logo_basic',
        'logo_standard',
        'logo_pro',
        'marketing_basic',
        'marketing_standard',
        'marketing_pro',
    ];
}





