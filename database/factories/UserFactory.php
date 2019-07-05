<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

// $factory->define(App\User::class, function (Faker $faker) {
//     return [
//         'name' => $faker->name,
//         'email' => $faker->unique()->safeEmail,
//         'email_verified_at' => now(),
//         'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
//         'remember_token' => str_random(10),
//     ];
// });



$factory->define(App\inventory::class, function (Faker $faker) {

    //$date = $faker->date($format = 'Y-m-d', $max = 'now');
    //$time = $faker->time($format = 'H:i:s', $max = 'now'); 

    //$dateTime = $date+" "+$time;

    return [
        'itemName' => $faker->name,
        // 'category' => $faker->random_int(1,14),
        // 'quantity' => $faker->random_int(1,200),
        'category' => $faker->numberBetween($min = 1, $max = 14),
        'quantity' => $faker->numberBetween($min = 1, $max = 200),
        'barcode' => $faker->unique()->isbn13,
        'date_created' => $faker->dateTime($max = 'now', $timezone = null),
        'last_modified' => $faker->dateTime($max = 'now', $timezone = null),
    ];
});

