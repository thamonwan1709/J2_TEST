<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\fact_user_permission;
use App\Models\Permissions;
use App\Models\Users;
use Faker\Generator as Faker;

$factory->define(fact_user_permission::class, function (Faker $faker) {
    return [

            "user_id"=>Users::inRandomOrder()->get()->first()->id,
            "permission_id"=>Permissions::inRandomOrder()->get()->first()->id,

    ];
});
