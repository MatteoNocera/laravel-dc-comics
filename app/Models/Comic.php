<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comic extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['title', 'thumb', 'description', 'price'];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'artists' => 'array',
        'writers' => 'array'
    ];
}
