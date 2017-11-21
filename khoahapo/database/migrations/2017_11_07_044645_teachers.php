<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Teachers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->increments('teachers_id');
            $table ->string('number_teacher_id')->unique();
            $table -> string('name');
            $table -> string('email')->unique();
            $table -> string('password');
            $table -> integer('phone');
            $table -> string('address');
            $table -> integer('level');
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
          Schema::dropIfExists('teachers');
    }
}
