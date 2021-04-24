<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DiagnosisDatas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Diagnosis_Data', function (Blueprint $table) {
            $table->id();
            $table->string("qualitative_index")->nullable();
            $table->string("big_category")->nullable();
            $table->string("mid_category")->nullable();
            $table->string("small_category")->nullable();
            $table->string("promotion_title")->nullable();
            $table->string("promotion")->nullable();
            $table->string("qual_quan")->nullable();
            $table->string("current")->nullable();
            $table->string("future")->nullable();
            $table->string("reason")->nullable();
            $table->string("action")->nullable();
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
        Schema::dropIfExists('Diagnosis_Data');
    }
}
