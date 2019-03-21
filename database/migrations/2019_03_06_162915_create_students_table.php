<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('stud_id');
            $table->string('stud_name');
            $table->string('stud_age');
            $table->string('stud_mykid');
            $table->string('stud_class');
            $table->mediumText('stud_address');
            $table->string('father_name');
            $table->string('father_ic');
            $table->string('father_phone');
            $table->string('father_email');
            $table->string('father_job');
            $table->string('mother_name');
            $table->string('mother_ic');
            $table->string('mother_phone');
            $table->string('mother_email');
            $table->string('mother_job');
            $table->string('stud_img');
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
        Schema::dropIfExists('students');
    }
}
