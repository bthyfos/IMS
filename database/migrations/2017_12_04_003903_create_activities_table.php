<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivitiesTable extends Migration
{

    public function up()
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('activityType')->unsigned();
            $table->foreign('activityType')->references('id')->on('products');
            $table->integer('createdBy')->unsigned();
            $table->foreign('createdBy')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *B
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('activities');
    }
}
