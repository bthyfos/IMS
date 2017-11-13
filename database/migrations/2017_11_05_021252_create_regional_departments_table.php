<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegionalDepartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regional_departments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('regionId')->unsigned();
            $table->integer('departmentId')->unsigned();
            $table->foreign('departmentId')->references('id')->on('departments');
            $table->foreign('regionId')->references('id')->on('regions');
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
        Schema::dropIfExists('regional_departments');
    }
}
