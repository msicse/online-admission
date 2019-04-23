<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('program_id')->nullable();
            $table->integer('level')->nullable();
            $table->integer('year')->nullable();
            $table->integer('semester')->nullable();
            $table->integer('shift')->nullable();
            $table->string('name');
            $table->string('fname')->nullable();
            $table->string('mname')->nullable();
            $table->string('dob')->nullable();
            $table->tinyInteger('gender')->nullable();
            $table->string('phone');
            $table->string('email')->unique();
            $table->string('result')->nullable();
            $table->string('nationality')->nullable();
            $table->string('guardian')->nullable();
            $table->string('guardian_relation')->nullable();
            $table->text('skill')->nullable();
            $table->text('present_address')->nullable();
            $table->text('parmanent_address')->nullable();
            $table->string('image')->default('default.png');
            $table->string('password');
            $table->string('merit')->nullable();
            $table->boolean('approved')->default(false);
            $table->rememberToken();


            $table->foreign('program_id')
                  ->references('id')->on('programes')
                  ->onDelete('cascade');

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
        Schema::dropIfExists('applications');
    }
}
