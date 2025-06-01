<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    /** @use HasFactory<\Database\Factories\RoleFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'display_name_en',
        'display_name_ar',
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
