<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;
    protected $fillable = [
        'stape_1', 'company_description', 'font_selection', 'stape_4',
        'source_5', 'source_6', 'source_7', 'additional_needs',
        'source_9', 'first_name', 'last_name', 'phone_number', 'email', 'company','websites','details','form_type'
    ];

    protected $casts = [
        'font_selection' => 'array',
        'source_5' => 'array',
        'source_6' => 'array',
        'source_7' => 'array',
        'additional_needs' => 'array',
        'source_9' => 'array',
        'logo_type' => 'array',
    ];
}
