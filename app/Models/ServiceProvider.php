<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceProvider extends Model
{
    protected $fillable = [
        'service_id',
        'professional_id',
    ];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function professional()
    {
        return $this->belongsTo(Professional::class);
    }
}
