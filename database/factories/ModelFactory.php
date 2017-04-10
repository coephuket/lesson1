<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'level' =>  'user',
        'remember_token' => str_random(10),
    ];
});


$factory->define(App\Board::class, function (Faker\Generator $faker) {
    return [
        'title' => 		$faker->sentence($nbWords = 6, $variableNbWords = true),
        'body' =>  		$faker->name.": ".$faker->text($maxNbChars = 200),
        'user_id' =>    $faker->numberBetween($min = 1, $max = 10),
        'ip'     =>     $faker->ipv4,
        'created_at' =>	$faker->dateTime($max = 'now', $timezone = date_default_timezone_get()),
        'updated_at' => date('Y-m-d H:i:s')	,

    ];
});