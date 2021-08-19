<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdmissionFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admission_forms', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('present_address')->nullable();
            $table->string('permanent_address')->nullable();
            $table->string('occupation');
            $table->string('dob');
            $table->string('nationality');
            $table->string('blood_group')->nullable();
            $table->string('gender');
            $table->string('phone');
            $table->string('email');
            $table->text('education');
            $table->string('ref_name')->nullable();
            $table->string('ref_phone')->nullable();
            $table->string('ref_batch_name')->nullable();
            $table->string('ref_batch_id')->nullable();
            $table->string('ref_relation')->nullable();
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
        Schema::dropIfExists('admission_forms');
    }
}
