<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Producto;
use App\User;
use Faker\Generator as Faker;

$factory->define(Producto::class, function (Faker $faker) {
    $path = storage_path('app/public/img/productos');
    return [
        'name' => $faker->sentence(3),
        'description' => $faker->paragraph(4),
        'price' => $faker->randomFloat(2, 100000, 10000000),
        'user_id' => User::all()->random()->id,
        'featured_img' => $faker->image($path, 800, 600,'technics', false),
    ];
});
