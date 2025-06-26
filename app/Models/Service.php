<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{
    /** @use HasFactory<\Database\Factories\ServiceFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title_en',
        'title_ar',
        'description_en',
        'description_ar',
        'icon',
        'is_active',
        'country_id',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function professionals()
    {
        return $this->belongsToMany(Professional::class, 'service_providers');
    }

    public function companies()
    {
        return $this->belongsToMany(Company::class);
    }
}
