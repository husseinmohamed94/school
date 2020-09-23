<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
           $table->string('name_ar');
           $table->string('name_en');

           $table->string('email')->unique();
           $table->string('mobile');
           $table->string('Mothername_ar');    
          $table->string('Mothername_en');
          $table->string('Address_ar');
           $table->string('Address_en');
           $table->enum('Gender', ['Male','female']);
           $table->integer('row_id');
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
