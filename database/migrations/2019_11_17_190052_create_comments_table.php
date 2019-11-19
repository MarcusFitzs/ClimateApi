<?php
# @Date:   2019-11-17T19:00:52+00:00
# @Last modified time: 2019-11-17T19:25:31+00:00




use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('article_id')->unsigned();
            $table->bigInteger('author_id')->unsigned();
            $table->text('body');
            $table->timestamps();

            $table->foreign('article_id')->references('id')->on('articles');
            $table->foreign('author_id')->references('id')->on('people');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
