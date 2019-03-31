<?php

use App\Models\Lecture;
use Faker\Generator as Faker;

$factory->define(Lecture::class, function (Faker $faker) {
	// $design = factory(App\Models\Design::class)->create();
    return [
    	'design_id' => $faker->unique()->randomDigitNotNull,
        'type' => 'kajian rutin',
        'audience' => $faker->sentence,
        'title' => $faker->word,
        'tag_line' => $faker->sentence,
        'lecturer' => $faker->name,
        'book' => $faker->domainWord,
        'place' => $faker->streetAddress,
        'date' => $faker->date,
        'time' => $faker->time,
        'organizer' => $faker->company,
        'contact' => $faker->e164PhoneNumber,
        'donation' => $faker->sentence,
        'is_meal' => rand(0,1),
        'is_streaming' => rand(0,1),
    ];
});
