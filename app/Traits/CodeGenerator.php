<?php

namespace App\Traits;

trait CodeGenerator
{
    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
        	$ltr = chr(rand(65, 90));
	        $ltr2 = chr(rand(65, 90));
	        $ltr3 = chr(rand(65, 90));
	        $ltr4 = chr(rand(65, 90));
	        $id = $model->id + rand(0,10);
	        
	        $code = $ltr .rand(0,999). $id . $ltr2.$ltr3.$ltr4;

	        $model->code = $code;
        });
    }
}
