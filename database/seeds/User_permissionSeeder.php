<?php

use App\Models\Permissions;
use App\Models\Users;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class User_permissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        DB::table('fact_permission')->insert([
            "user_id"=>Users::inRandomOrder()->get()->first()->id,
            "permission_id"=>Permissions::inRandomOrder()->get()->first()->id,
        ]);
    }
}
