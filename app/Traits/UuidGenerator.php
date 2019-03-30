<?php

namespace App\Traits;

use Ramsey\Uuid\Uuid as Generator;

trait UuidGenerator
{
    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->uuid = (string) Generator::uuid4();
        });
    }
}
