<?php

namespace App\Traits;

use ErrorException;

trait UrlAttribue
{
	protected $appends = [
		'url'
	];

	public function getUrlAttribute()
	{
		throw new ErrorException('method getUrlAttribute() is not defined yet in the model');
	}
}
