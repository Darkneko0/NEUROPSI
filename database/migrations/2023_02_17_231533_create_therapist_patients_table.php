<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTherapistPatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('therapist_patients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('reason_for_consultation');
            $table->date('date_consultation');

             //Foreign keys
               
                $table->unsignedBigInteger('patient_id');
                $table->foreign('patient_id')->references('id')->on('patients');

              
                $table->unsignedBigInteger('user_id');
                $table->foreign('user_id')->references('id')->on('users');


                $table->softDeletes();

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
        Schema::dropIfExists('therapist_patients');
    }
}
