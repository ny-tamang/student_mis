<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCollegeInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('college_infos', function (Blueprint $table) {
            $table->bigIncrements('id'); 
            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('faculty_id');
            $table->unsignedBigInteger('batch_id');
            $table->unsignedBigInteger('semester_id');
            

            
            $table->timestamps();

            $table->foreign('student_id')->references('id')->on('students')->onDelete('CASCADE');
            $table->foreign('faculty_id')->references('id')->on('faculties')->onDelete('CASCADE');    
            $table->foreign('batch_id')->references('id')->on('batches')->onDelete('CASCADE');
            $table->foreign('semester_id')->references('id')->on('semesters')->onDelete('CASCADE');   
            $table->string('tu_reg_no');
            $table->string('symbol_no');   
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('college_infos');
    }
}
