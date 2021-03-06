<?php

declare(strict_types=1);

use Faker\Generator as Faker;
use Illuminate\Support\Str;
use Vanilo\Cart\Tests\Dummies\Consumer;

$factory->define(
    Consumer::class,
    function (Faker $faker) {
        static $password;

        return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => Str::random(10),
    ];
    }
);
