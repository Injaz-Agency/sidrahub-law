<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Professional extends Model
{
    /** @use HasFactory<\Database\Factories\ProfessionalFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'type',
        'freelancer',
        'company_id',
        'image',
        'name_en',
        'name_ar',
        'is_active',
        'job_title_en',
        'job_title_ar',
        'description_en',
        'description_ar',
        'years_of_experience',
        'info_en',
        'info_ar',
        'country_id',
    ];

    protected $casts = [
        'freelancer' => 'boolean',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function services()
    {
        return $this->belongsToMany(Service::class, 'service_providers');
    }
}
