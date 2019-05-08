<?php

use App\Models\Design;
use Faker\Generator as Faker;

$factory->define(Design::class, function (Faker $faker) {
	$designer = factory(App\Models\Designer::class)->create();
    return [
    	'designer_id' => $designer->id,
    	'status' => 'in-progress',
        'size' => 'A4',
        'image' => $faker->imageUrl,
        'add_info' => 'Nullable',
        // 'code' => $faker->shuffle('W74213BLX')
    ];
});
