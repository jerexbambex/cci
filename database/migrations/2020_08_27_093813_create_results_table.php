<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('results', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('subject_1');
            $table->string('grade_1');
            $table->string('subject_2');
            $table->string('grade_2');
            $table->string('subject_3');
            $table->string('grade_3');
            $table->string('subject_4')->nullable();
            $table->string('grade_4')->nullable();
            $table->text('avatar')->nullable();
            $table->string('exam_number');
            $table->string('exam_year');
            $table->string('exam_type');
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
        Schema::dropIfExists('results');
    }
}
