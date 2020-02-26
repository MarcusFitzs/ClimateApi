<?php
# @Date:   2019-11-17T18:59:55+00:00
# @Last modified time: 2020-02-26T18:39:20+00:00




use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->bigInteger('author_id')->unsigned();
            $table->string('title');
            $table->string('description');
            $table->LONGTEXT('detailedDesc');
            $table->string('url');
            $table->string('urlToImage');
            $table->string('publishedAt');
            $table->timestamps();


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
        Schema::dropIfExists('articles');
    }
}
