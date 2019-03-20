<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Design extends Model
{
    protected $guarded = [
    	'created_at', 'deleted_at'
    ];

    protected $dates = [
    	'date'
    ];

    public function user()
    {
    	return $this->belongsTo('App\User')->withDefault([
    		'name' => 'This design hasn\'t been taken yet by any user.'
    	]);
    }
}
