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

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Product::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'description_en' => $faker->paragraph,
        'description_kh' => $faker->paragraph,
    ];
});

$factory->define(App\ProductPhoto::class, function (Faker\Generator $faker) {
    return [
        'product_id' => factory('App\Product')->create()->id,
        'file_name' => $faker->imageUrl
    ];
});