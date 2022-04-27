<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materials', function (Blueprint $table) {
            $table->id();
            $table->text('photo')->nullable();
            $table->string('header_ru')->nullable();
            $table->string('header_uz')->nullable();
            $table->string('header_en')->nullable();
            $table->text('description1_ru')->nullable();
            $table->text('description1_uz')->nullable();
            $table->text('description1_en')->nullable();
            $table->text('description2_ru')->nullable();
            $table->text('description2_uz')->nullable();
            $table->text('description2_en')->nullable();
            $table->string('view_ru')->nullable();
            $table->string('view_uz')->nullable();
            $table->string('view_en')->nullable();
            $table->text('size')->nullable();
            $table->text('type_ru')->nullable();
            $table->text('type_uz')->nullable();
            $table->text('type_en')->nullable();
            $table->integer('class')->nullable();
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
        Schema::dropIfExists('materials');
    }
}
