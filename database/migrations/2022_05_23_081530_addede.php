<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Addede extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('webinars', function (Blueprint $table) {
            $table->text('survey_question1')->nullable();
            $table->text('survey_question2')->nullable();
            $table->text('survey_question3')->nullable();
            $table->text('survey_question4')->nullable();
            $table->text('survey_question5')->nullable();
            $table->text('survey_question6')->nullable();
            $table->text('survey_question7')->nullable();
            $table->text('survey_question8')->nullable();
            $table->text('survey_question9')->nullable();
            $table->text('survey_question10')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('webinars', function (Blueprint $table) {
            //
        });
    }
}
