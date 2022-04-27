<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkwithsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workwiths', function (Blueprint $table) {
            $table->id();
            $table->text('header1_ru')->nullable();
            $table->text('header1_uz')->nullable();
            $table->text('header1_en')->nullable();
            $table->text('header2_ru')->nullable();
            $table->text('header2_uz')->nullable();
            $table->text('header2_en')->nullable();
            $table->text('header3_ru')->nullable();
            $table->text('header3_uz')->nullable();
            $table->text('header3_en')->nullable();
            $table->text('description1_ru')->nullable();
            $table->text('description1_uz')->nullable();
            $table->text('description1_en')->nullable();
            $table->text('description2_ru')->nullable();
            $table->text('description2_uz')->nullable();
            $table->text('description2_en')->nullable();
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
        Schema::dropIfExists('workwiths');
    }
}
