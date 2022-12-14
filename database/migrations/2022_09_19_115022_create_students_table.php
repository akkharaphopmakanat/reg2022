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
            $table->increments('id');
            $table->timestamps();
            $table->string('idcard');
            $table->string('prefix');
            $table->string('name');
            $table->string('surname');
            $table->string('gender');
            $table->string('tel');
            $table->string('email');
            $table->string('birthdate');
            $table->string('type')->default('นักเรียน');;
            $table->boolean('activated')->default('0');;
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
