<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lecture extends Model
{
    protected $dates = [
    	'date'
    ];

    protected $guarded = [
    	'id', 'created_at', 'updated_at'
    ];

    public function design()
    {
    	return $this->belongsTo(Design::class);
    }
}
