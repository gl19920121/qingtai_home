<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $connection = 'mysql_crm';
    protected $casts = [
        'industry' => 'json',
        'location' => 'json',
    ];
    protected $appends = [
        'industry_show', 'investment_show', 'scale_show', 'logo_url',
    ];
    protected $appends = [];
}
