<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMusikTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('musik_559', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title',100);
            $table->string('artist',50);
            $table->string('genre',50);
            $table->string('album',50);
            $table->string('duration',10);
            $table->string('year',10);
            $table->string('listener',50);
            $table->string('poster',300);
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
        Schema::dropIfExists('musik');
    }
}
