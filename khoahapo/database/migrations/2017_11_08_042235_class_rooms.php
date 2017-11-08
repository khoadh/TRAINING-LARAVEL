<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ClassRooms extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('classrooms', function (Blueprint $table) {
            $table->increments('classrooms_id');
            $table->integer('id_subject');
            $table->integer('id_teacher');
            $table->string('email')->unique();
            $table->integer('phone');
            $table->string('address');
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
         Schema::dropIfExists('classrooms');
    }
}
