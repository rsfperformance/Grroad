<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->text('territory')->nullable();
            $table->integer('workers')->nullable();
            $table->text('plant_area')->nullable();
            $table->integer('old')->nullable();
            $table->text('projects')->nullable();
            $table->text('photo')->nullable();
            $table->text('description_ru')->nullable();
            $table->text('description_uz')->nullable();
            $table->text('description_en')->nullable();
            $table->integer('years')->nullable();
            $table->text('history_ru')->nullable();
            $table->text('history_uz')->nullable();
            $table->text('history_en')->nullable();
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
        Schema::dropIfExists('abouts');
    }
}
