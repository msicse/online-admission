<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSscsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sscs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('fname');
            $table->string('mname');
            $table->string('dob');
            $table->tinyInteger('gender');
            $table->string('roll');
            $table->string('reg');
            $table->string('board');
            $table->string('session');
            $table->string('group');
            $table->tinyInteger('type');
            $table->integer('passing_year');
            $table->string('institute');
            $table->float('result');
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
        Schema::dropIfExists('sscs');
    }
}
