<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hits', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('query_id')->unsigned()->index();
            $table->string('pageURL');
            $table->text('tags');
            $table->string('largeImageURL');
            $table->timestamps();

            $table->foreign('query_id')->references('id')->on('queries')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hits');
    }
}
