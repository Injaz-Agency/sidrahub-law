<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    /** @use HasFactory<\Database\Factories\CompanyFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'name_en',
        'name_ar',
        'registration_number',
        'legal_entity',
        'license',
        'is_active',
        'about_ar',
        'about_en',
        'address_en',
        'address_ar',
        'image',
        'country_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function professionals()
    {
        return $this->hasMany(Professional::class);
    }

    public function services()
    {
        return $this->belongsToMany(Service::class);
    }
}
