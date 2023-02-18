<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTherapistTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('therapist_tests', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('therapist_id');
            $table->foreign('therapist_id')->references('id')->on('therapist_patients');

            $table->unsignedBigInteger('test_id');
            $table->foreign('test_id')->references('id')->on('tests');


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
        Schema::dropIfExists('therapist_tests');
    }
}
