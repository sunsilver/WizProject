<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Board;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;

$factory->define(Board::class, function (Faker $faker) {
    return [
        'user_id'       => DB::table('users')->inRandomOrder()->first()->id,
        'title'         => $faker->title,
        'content'       => $faker->text,
        'created_at'    => date("Y-m-d h:i:s", time())
    ];
});
