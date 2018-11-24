<?php

use Faker\Generator as Faker;

$factory->define(Tests\Utils\Models\CompanyUid::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence,
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
