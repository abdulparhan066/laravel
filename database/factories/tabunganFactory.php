<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(tabungan::class, function (Faker $faker) {
    return [
        "niss" => $faker ->unique ->rendomNumber,
        "nama" => $faker ->name,
        "kelas" => $faker ->numberBetween(1,5),
        "jml" => $faker ->numberBetween(1000,100000)

    ];
});
