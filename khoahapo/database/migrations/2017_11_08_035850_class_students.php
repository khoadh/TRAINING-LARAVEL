<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ClassStudents extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('class_students', function (Blueprint $table) {
            $table->increments('class_subjects_id');
            $table->integer('students_id');
            $table->integer('classrooms_id');
            $table->string('email')->unique();
            $table->integer('phone');
            $table->string('address');
            $table->integer('score');
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
          Schema::dropIfExists('class_students');
    }
}
