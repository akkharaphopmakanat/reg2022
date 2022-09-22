<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parents', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('idcard');
            $table->string('prefix');
            $table->string('name');
            $table->string('surname');
            $table->string('position');
            $table->string('revenue');
            $table->string('note');
            $table->string('age');
            $table->string('vocation');
            $table->boolean('activated');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parents');
    }
}
