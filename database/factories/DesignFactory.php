<?php

use App\Models\Design;
use Faker\Generator as Faker;

$factory->define(Design::class, function (Faker $faker) {
	$designer = factory(App\Models\Designer::class)->create();
    return [
    	'designer_id' => $designer->id,
        'size' => 'A4',
        'add_info' => 'Nullable',
    ];
});
