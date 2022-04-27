<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('header_ru')->nullable();
            $table->string('header_uz')->nullable();
            $table->string('header_en')->nullable();
            $table->string('description_ru')->nullable();
            $table->string('description_uz')->nullable();
            $table->string('description_en')->nullable();
            $table->integer('time')->nullable();
            $table->integer('height')->nullable();
            $table->integer('territory')->nullable();
            $table->integer('number_of_lanes')->nullable();
            $table->text('photo')->nullable();
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
        Schema::dropIfExists('projects');
    }
}
