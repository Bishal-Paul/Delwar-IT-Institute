<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMcqAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mcq_answers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('category_id');
            $table->foreignId('mcq_question_id');
            $table->text('mcq_answers')->nullable();
            $table->string('earning')->nullable();
            $table->string('earning_ss')->nullable();
            $table->string('student_img')->nullable();
            $table->text('about_student')->nullable();
            $table->text('success_story')->nullable();
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
        Schema::dropIfExists('mcq_answers');
    }
}
