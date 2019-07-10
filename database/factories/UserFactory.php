<?php

use App\User;
use Illuminate\Support\Str;
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

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});

$factory->define(Jobs::class, function (Faker $faker) {
    return [
        'name_job' => $faker->word,
        'seniority' => $faker->sentence,
        'details' => $faker->text,
        
        'sallery' => $faker->randomFloat($nbMaxDecimals=NULL, $min=10, $max=100),
    ];
});

$factory->define(Donor::class, function (Faker $faker) {
    return [
        'full_name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'phone' => $faker->e164PhoneNumber,
        'amount_donated' => $faker->randomFloat($nbMaxDecimals=NULL, $min=10, $max=10000),
    ];
});
