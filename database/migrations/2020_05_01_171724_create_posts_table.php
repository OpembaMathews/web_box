<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->text('sch_description')->nullable();
            $table->string('news_title')->nullable();
            $table->text('description')->nullable();
            $table->text('event1')->nullable();
            $table->string('primage')->nullable();
            $table->string('prname')->nullable();
            $table->text('prdescr')->nullable();
            $table->string('ptaimage')->nullable();
            $table->string('ptaname')->nullable();
            $table->text('ptaidescr')->nullable();
            $table->string('bogimage')->nullable();
            $table->string('bogname')->nullable();
            $table->text('bogdescr')->nullable();
            $table->string('abt_title')->nullable();
            $table->text('abt_us')->nullable();
            $table->string('sch_pic')->nullable();
            $table->timestamps();

            $table->index('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
