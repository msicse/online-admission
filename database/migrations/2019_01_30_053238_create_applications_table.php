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
            $table->integer('ssc_id');
            $table->integer('hsc_id');
            $table->string('semester');
            $table->string('phone');
            $table->string('email');
            $table->string('nationality');
            $table->string('guardian');
            $table->string('guard_relation');
            $table->string('merit');
            $table->text('present_address');
            $table->text('parmanent_address');
            $table->string('image');
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
