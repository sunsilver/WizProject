<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'comment_writer_id'     => DB::table('users')->inRandomOrder()->first()->id,
        'post_id'               => DB::table('wiz_boards')->inRandomOrder()->first()->id,
        'content'               => $faker->text,
        'created_at'            => date("Y-m-d h:i:s", time())
    ];
});