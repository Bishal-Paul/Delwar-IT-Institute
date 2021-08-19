<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCareersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('careers', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->string('category');
            $table->string('type');
            $table->string('location');
            $table->text('description');
            $table->text('responsivilities');
            $table->text('requirement');
            $table->string('experience');
            $table->string('education')->nullable();
            $table->string('shift')->nullable();
            $table->string('salary')->nullable();
            $table->string('deadline')->nullable();
            $table->text('benefits')->nullable();
            $table->text('aditional_note')->nullable();
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
        Schema::dropIfExists('careers');
    }
}
