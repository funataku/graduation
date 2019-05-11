<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            // 以下Migrations userの方からコピペ＋修正
                $table->increments('id');
                $table->timestamps();
               
             // 以下新規追加
                //userIDとreviewのひも付けのため
                $table->string('user_id');
                //物件IDとreviewのひも付けのため
                $table->string('estate_id');
                //５つ星評価（総合）
                $table->integer('review_star_overall');
                //５つ星評価（綺麗さ）
                $table->integer('review_star_cleanliness');
                //５つ星評価（共有設備）
                $table->integer('review_star_facility');
                //５つ星評価（セキュリティ）
                $table->integer('review_star_security');
                //コメント（総合的に）
                $table->string('review_comment_overall')->nullable();
                
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reviews');
    }
}
