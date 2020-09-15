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
        'price' => $faker->regexify('[3-9]') * 50,
        'price_new' => '',
        'decsription' => $faker->text(100),
        'fabric_composition' => $faker->text(10),
        'fabric_density' => $faker->randomDigitNotNull * 100,
        'fabric_width' => $faker->regexify('[1-2]') * 90,
        'is_oneton' => $faker->boolean($chanceOfGettingTrue = 50),
        'is_new' => $faker->boolean($chanceOfGettingTrue = 30),
        'is_action' => $faker->boolean($chanceOfGettingTrue = 20),
        'is_trend' => $faker->boolean($chanceOfGettingTrue = 30),
        
    ];
});
