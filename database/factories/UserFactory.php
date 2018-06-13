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

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});


$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'title' => $faker->text(14),
        'body' => $faker->text(454),
        'image' => 'http::/lorempixel.com/640/480'
    ];
});

$factory->define(App\JobVacancy::class, function (Faker $faker) {
    return [
        'job_category' => $faker->text(14),
        'job_post' => $faker->text(14),
        'no_of_vacancy' => $faker->randomDigit,
        'company_logo' =>'http::/lorempixel.com/640/480'
        
    ];
});




