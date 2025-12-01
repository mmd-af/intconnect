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
    ];

    protected function casts(): array
    {
        return [
            'date' => 'date'
        ];
    }

    public function createBy()
    {
        return $this->belongsTo(User::class, 'creat_by');
    }
}
