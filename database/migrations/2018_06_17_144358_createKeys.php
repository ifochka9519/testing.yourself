<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::table('tests', function (Blueprint $table){
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
        });
        Schema::table('questions', function (Blueprint $table){
            $table->integer('test_id')->unsigned();
            $table->foreign('test_id')->references('id')->on('tests');
        });
        Schema::table('answers', function (Blueprint $table){
            $table->integer('question_id')->unsigned();
            $table->foreign('question_id')->references('id')->on('questions');
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
