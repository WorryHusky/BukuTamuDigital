<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSouvenirsTable extends Migration
{
    public function up()
    {
        Schema::create('souvenirs', function (Blueprint $table) {

            $table->integer('total')->default(0);
            $table->integer('umum')->default(0);
            $table->integer('keluarga')->default(0);
            $table->integer('given')->default(0);
            // Add more columns as needed

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('souvenirs');
    }
}