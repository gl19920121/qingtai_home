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
        'tag' => 'array',
    ];
    protected $hidden = [
        'release_uid', 'execute_uid', 'channel'
    ];
    protected $appends = [
        'experience_show', 'education_show', 'single_location', 'welfare_show',
    ];
    protected $dateFormat = 'U';

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function getSalaryCountAttribute(): string
    {
        return empty($this->salary_count) ? 12 : $this->salary_count;
    }

    public function getExperienceShowAttribute(): string
    {
        return config('lang.experience')[$this->experience];
    }

    public function getEducationShowAttribute(): string
    {
        return config('lang.education')[$this->education];
    }

    public function getSingleLocationAttribute(): array
    {
        return isset($this->location[0]) ? $this->location[0] : $this->location;
    }

    public function getWelfareShowAttribute(): string
    {
        return config('lang.welfare')[$this->welfare];
    }
}
