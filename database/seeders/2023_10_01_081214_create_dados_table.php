<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDadosTable extends Migration
{
    public function up()
    {
        Schema::create('landing_data', function (Blueprint $table) {
            $table->id();
            $table->string('title'); 
            $table->string('subtitle'); 
            $table->foreignId('file_id')->constrained();
            $table->dateTime('insertDate');
            $table->timestamps(); 
        });
    }

    public function down()
    {
        Schema::dropIfExists('landing_data');
    }
}