<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Place;


$factory->define(Place::class, function (Faker $faker) {
  return [
    "name" => $faker -> streetSuffix,
    "address" => $faker -> streetAddress,
    "city" => $faker -> city,
    "nation" => $faker -> country
  ];
});
