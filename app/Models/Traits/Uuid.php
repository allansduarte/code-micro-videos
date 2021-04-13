<?php

namespace App\Models\Traits;

use Ramsey\Uuid\Uuid as RamseyUuid;

trait Uuid
{
    public static function bootUuid()
    {
        static::creating(function ($model) {
            $model->uuid = RamseyUuid::uuid4();
        });
    }
}
