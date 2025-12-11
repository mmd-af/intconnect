<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{  
     use SoftDeletes;
     
    protected $fillable = [
        'title',
        'description',
        'time',
        'date',
        'address',
        'photo',
        'created_by',
    ];

    protected function casts(): array
    {
        return [
            'date' => 'date'
        ];
    }

    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    protected static function booted()
    {
     static::creating(function ($event) {
         $event->slug = \Str::slug($event->title);
     });
    }
}
