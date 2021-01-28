<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrails2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trails2', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('location');
            $table->string('distance');
            $table->string('coverlmage');
            $table->string('city');
            $table->string('difficulty');
            $table->string('evaluation');
            $table->string('altitude');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trails2');
    }
}
