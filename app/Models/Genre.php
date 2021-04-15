<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use phpDocumentor\Reflection\DocBlock\Tags\Generic;

class Genre extends Model
{
    use SoftDeletes, Traits\Uuid;

    protected $fillable = ['name', 'is_active'];
    protected $casts = [
        'id' => 'string',
        'is_active' => 'boolean'
    ];
    protected $keyType = 'string';
    public $incrementing = false;
}
