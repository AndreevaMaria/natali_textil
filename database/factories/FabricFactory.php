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

/*use \Illuminate\Database\Eloquent\Factory;*/
use App\Fabric;
use Faker\Generator as Faker;

$factory->define(Fabric::class, function (Faker $faker) {

    return [
        'idFabricsType' => \App\FabricsType::all()->random()->id,
        'title' => $faker->catchPhrase,
        'articul' => $faker->text(10),
        'price' => $faker->numberBetween($min = 100, $max = 1000),
        'price_new' => $numberBetween($min = 100, $max = 1000),
        'decsription' => $faker->text(3000),
        'fabric_composition' => $faker->text(300),
        'fabric_width' => $faker->numberBetween($min = 100, $max = 160),
        'fabric_density' => $faker->numberBetween($min = 100, $max = 500),
        'is_oneton' => => $faker->boolean($chanceOfGettingTrue = 50),
        'is_new' => => $faker->boolean($chanceOfGettingTrue = 30),
        'is_action' => => $faker->boolean($chanceOfGettingTrue = 20),
        'is_trend' => $faker->=> $faker->boolean($chanceOfGettingTrue = 30),
        
    ];
});
