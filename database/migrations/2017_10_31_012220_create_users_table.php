<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('surname');
            $table->string('staffId')->nullable()->unique();
            $table->string('email')->unique();
            $table->integer('userRoleId')->unsigned();
            $table->integer('regionId')->unsigned();
            $table->integer('departmentId')->unsigned();
            $table->integer('positionId')->unsigned();
            $table->bigInteger('cellphone')->unique();
            $table->string('physicalAddress');
            $table->date('dob');
            $table->string('password');
            $table->foreign('regionId')->references('id')->on('regions');
            $table->foreign('positionId')->references('id')->on('positions');
            $table->foreign('departmentId')->references('id')->on('departments');
            $table->foreign('userRoleId')->references('id')->on('user_roles');
             $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
