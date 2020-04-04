<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseBySemestersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_by_semesters', function (Blueprint $table) {
            $table->id();
            $table->foreignId('course_id');
            $table->string('location');
            $table->integer('number_of_students');
            $table->string('teacher');
            $table->string('semester');
            $table->integer('year');
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
        Schema::dropIfExists('course_by_semesters');
    }
}
