<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Permissions;

class Permission extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permission' , function (Blueprint $table) {
            $table->increments('id');
            $table->string('permission_name',20);
        });
        $data=[
            ['permission_name' => 'index'],
            ['permission_name' => 'create'],
            ['permission_name' => 'edit'],
            ['permission_name' => 'delete'],
        ];
    Permissions::insert($data);
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permission');
    }
}
