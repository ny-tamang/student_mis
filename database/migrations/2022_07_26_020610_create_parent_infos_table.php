<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParentInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parent_infos', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('student_name');
            
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('guardian_name');
            $table->string('contact_info', 10);
            $table->foreign('student_id')->references('id')->on('students')->onDelete('CASCADE');
           
            
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
        Schema::dropIfExists('parent_infos');
    }
}
