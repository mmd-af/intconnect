<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
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
}
