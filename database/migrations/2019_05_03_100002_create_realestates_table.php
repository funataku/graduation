<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRealestatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('realestates', function (Blueprint $table) {
            // 以下Migrations userの方からコピペ＋修正
                $table->increments('id');
                $table->string('name')->unique();
                
                //ユーザーID。その人のだけ表示するため
                // $table->integer('user_id')->nullable();
                //エステートID。その人のだけ表示するため
                $table->DATETIME('estate_id')->nullable();
                // 住所＝address。nullable＝最悪登録しなくても良い
                $table->string('address')->nullable()->unique();
                // 緯度＝latitude
                $table->string('latitude')->nullable()->unique();
                // 経度＝longitude
                $table->string('longitude')->nullable()->unique();
                //URL(管理会社TOP)
                $table->string('url_top')->nullable();
                //URL(物件詳細)
                $table->string('url_estate')->nullable()->unique();
                $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('realestates');
    }
}
