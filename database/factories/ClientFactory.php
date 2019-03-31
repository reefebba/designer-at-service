<?php

use App\Models\Client;
use Faker\Generator as Faker;

$factory->define(Client::class, function (Faker $faker) {
	$design = factory(App\Models\Design::class)->create();
    return [
    	'design_id' => $design->id,
        'client_name' => $faker->name,
        'client_phone' => $faker->e164PhoneNumber,
    ];
});
