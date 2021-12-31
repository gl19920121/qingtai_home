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
    protected $hidden = [];
    protected $appends = [
        'is_default_logo', 'logo_url', 'scale_show', 'investment_show', 'nature_show',
    ];

    public function getIsDefaultLogoAttribute(): bool
    {
        return empty($this->attributes['logo']);
    }

    public function getLogoUrlAttribute(): string
    {
        if (empty($this->attributes['logo'])) {
            return config('app.url') . '/img/logo.png';
        } else {
            return asset(Storage::disk('company_logo')->url($this->attributes['logo']));
        }
    }

    public function getScaleShowAttribute(): string
    {
        return !empty($this->scale) ? config('lang.company.scale')[$this->scale] : '';
    }

    public function getInvestmentShowAttribute(): string
    {
        return !empty($this->investment) ? config('lang.company.investment')[$this->investment] : '';
    }

    public function getNatureShowAttribute(): string
    {
        return !empty($this->nature) ? config('lang.company.nature')[$this->nature] : '';
    }
}
