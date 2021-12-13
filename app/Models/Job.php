<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $connection = 'mysql_crm';
    protected $casts = [
        'type' => 'json',
        'location' => 'json',
        'channel' => 'array',
        'is_collected' => 'boolean',
        'created_at' => 'datetime:Y-m-d h:m:s',
        'updated_at' => 'datetime:Y-m-d h:m:s',
    ];
    protected $hidden = [
        'release_uid', 'execute_uid', 'channel'
    ];
    protected $appends = [];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
