<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tests', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->double('last_result')->default(0);
            $table->double('best_result')->default(0);
            $table->date('last_passing_the_test');
        });
        Schema::create('questions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('content');
        });
        Schema::create('answers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('content');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
