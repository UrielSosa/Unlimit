<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Producto;
use App\User;
use App\Category;
use Faker\Generator as Faker;

$factory->define(Producto::class, function (Faker $faker) {
    $path = storage_path('app/public/img');
    return [
        'name' => $faker->sentence(3),
        'description' => $faker->paragraph(2),
        'price' => $faker->randomFloat(2, 100000, 10000000),
        'user_id' => User::all()->random()->id,
        'category_id' => $faker->randomDigit,
        'featured_img' => 'https://images.clarin.com/2020/02/27/formulario-de-credencial-que-presentan___W5iab-YV_1200x0__1.jpg',
    ];
});
