<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHscsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hscs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ssc_id');
            $table->string('roll')->unique();
            $table->string('reg');
            $table->string('board');
            $table->string('session');
            $table->string('group');
            $table->tinyInteger('type');
            $table->integer('passing_year');
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
        Schema::dropIfExists('hscs');
    }
}
