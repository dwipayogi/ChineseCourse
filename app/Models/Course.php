<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'instructor_id',
        'title',
        'description',
        'slug',
        'thumbnail',
        'price',
        'level',
        'requirements',
        'what_will_learn',
        'duration',
        'total_enrolled',
        'status',
    ];

    public function instructor()
    {
        return $this->belongsTo(Instructor::class);
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
