<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    protected $fillable = [
        'name',
        'email',
        'bio',
        'profile',
    ];

    public function courses()
    {
        return $this->hasMany(Course::class);
    }
}
