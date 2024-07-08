<?php

namespace App\Models;

use App\Casts\Json;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    use HasFactory,
        SoftDeletes;

    protected $fillable = [
        'title',
        'images',
        'videos',
        'details',
        'event_date',
    ];

    protected function casts(): array
    {
        return [
            'images' => Json::class,
            'videos' => Json::class,
        ];
    }
}
