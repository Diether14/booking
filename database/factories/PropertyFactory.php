<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Property;
use Faker\Generator as Faker;

$factory->define(Property::class, function (Faker $faker) {
    return [
        'building_id' => $faker->numberBetween(1,10),
        'landlord_id' => $faker->numberBetween(1,10),
        'name' => Str::random(10),
        'bathrooms' => $faker->numberBetween(1,3),
        'car_spaces' => $faker->numberBetween(1,3),
        'check_in_instructions' => $faker->sentence(20, true),
        'check_out_instructions' => $faker->sentence(20, true),
        'check_in_time' => $faker->time('H:i:s', '15:00:00'),
        'check_out_time' => $faker->time('H:i:s', '10:00:00'),
        'wifi_name' => Str::random(10),
        'wifi_password' => Str::random(10),
        'lock_box_code' => Str::random(4),
        'nightly' => $faker->numberBetween(100,200),
        'weekly' => $faker->numberBetween(700,2000),
        'monthly' => $faker->numberBetween(4000,8000),
    ];
});
