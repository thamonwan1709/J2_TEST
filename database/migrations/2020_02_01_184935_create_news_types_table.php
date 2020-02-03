<?php

use App\Models\news_type;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_news',100);

    
        });
        $data=[
            ['name_news' => 'การเมือง'],
            ['name_news' => 'ก่อการร้าย'],
            ['name_news' => 'ไซเบอร์'],
            ['name_news' => 'ยาเสพติด'],
        ];
    news_type::insert($data);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news_types');
    }
}
