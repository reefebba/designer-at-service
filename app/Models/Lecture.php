<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Lecture extends Model
{
    protected $dates = [
    	'date'
    ];

    protected $guarded = [
    	'id', 'created_at', 'updated_at'
    ];

    public function getDateAttribute($value)
    {
        return (new Carbon($value))->format('d-m-Y');
    }

    public function design()
    {
    	return $this->belongsTo(Design::class);
    }
}
