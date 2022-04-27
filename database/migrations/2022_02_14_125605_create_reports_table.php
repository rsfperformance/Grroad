<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->string('header_ru')->nullable();
            $table->string('header_uz')->nullable();
            $table->string('header_en')->nullable();
            $table->text('description_ru')->nullable();
            $table->text('description_uz')->nullable();
            $table->text('description_en')->nullable();
            $table->text('photo_a')->nullable();
            $table->text('description1_ru')->nullable();
            $table->text('description1_uz')->nullable();
            $table->text('description1_en')->nullable();
            $table->text('photo_b')->nullable();
            $table->text('photo_c')->nullable();
            $table->text('description2_ru')->nullable();
            $table->text('description2_uz')->nullable();
            $table->text('description2_en')->nullable();
            $table->text('photo_d')->nullable();
            $table->text('description3_ru')->nullable();
            $table->text('description3_uz')->nullable();
            $table->text('description3_en')->nullable();
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
        Schema::dropIfExists('reports');
    }
}
