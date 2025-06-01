<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Country extends Model
{
    /** @use HasFactory<\Database\Factories\CountryFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name_en',
        'name_ar',
        'code',
    ];

    public function companies()
    {
        return $this->hasMany(Company::class);
    }

    public function professionals()
    {
        return $this->hasMany(Professional::class);
    }

    public function services()
    {
        return $this->hasMany(Service::class);
    }
}
