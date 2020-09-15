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
use App\Order;
use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {

    return [
        'user_id' => \App\User::all()->random()->id,
        'fabrics_id' => \App\Fabric::all()->random()->id,
        'order_num' => $faker->regexify('[1-9]{2}'),
        'amount' => $faker->randomNumber(2),
        'final_date' => $faker->dateTimeBetween($startDate = '+ 5 days', $endDate = '+ 15 days', $timezone = null)->format('Y-m-d'),
        'order_date' => $faker->dateTimeBetween($startDate = '- 2 month', $endDate = 'now', $timezone = null)->format('Y-m-d'),
        'is_active' => $faker->boolean($chanceOfGettingTrue = 90),
        'is_payed' => '0',//$faker->boolean($chanceOfGettingTrue = 80),
        'is_onway' => '0',//$faker->boolean($chanceOfGettingTrue = 50),
        'is_delivered' => '0',//$faker->boolean($chanceOfGettingTrue = 30),
        
    ];
});