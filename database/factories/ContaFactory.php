<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Conta;
use Faker\Generator as Faker;

$factory->define(Conta::class, function (Faker $faker) {
    return [
        'agencia' => $faker->numerify('####-#'),
        'numero_conta' => $faker->numerify('########'),
        'titular' => $faker->name,
        'saldo' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = NULL)
    ];
});
