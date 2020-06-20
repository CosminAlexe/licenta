<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsInternshipsApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students_internships_applications', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('student_id');
            $table->foreignId('internship_id');
            $table->string('status');

            $table->foreign('student_id')->references('id')->on('users');
            $table->foreign('internship_id')->references('id')->on('internships');        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students_internships_applications');
    }
}
