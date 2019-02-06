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
            $table->string('name');
            $table->string('fname');
            $table->string('mname');
            $table->string('dob');
            $table->tinyInteger('gender');
            $table->integer('semester');
            $table->integer('year');
            $table->integer('program');
            $table->string('phone');
            $table->string('email');
            $table->string('nationality');
            $table->string('guardian');
            $table->string('guardian_relation');
            $table->string('ssc_result');
            $table->string('hsc_result');
            $table->string('merit')->nullable();
            $table->boolean('approved')->nullable();
            $table->text('present_address');
            $table->text('parmanent_address');
            $table->string('image')->default('no-image.png');
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
