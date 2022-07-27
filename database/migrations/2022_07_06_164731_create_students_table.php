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
            $table->bigIncrements('id');
            $table->timestamps();

            $table->string('name' , 150);
            //$table->string('mobile' ,10) ->unique();
            $table->string('mobile' ,10);
            //$table->string('citizenship', 20) ->unique();
            $table->string('citizenship', 20);
            $table->string('gender',1);
            $table->string('bloodgroup');
            $table->string('perm_address');
            $table->string('temp_address')->nullable();
            //$table->string('email')->unique();
            $table->string('email');
            $table->date('dob');
            $table->boolean('is_active');
            $table->boolean('is_alumi');
            $table->string('picture')->nullable();
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
