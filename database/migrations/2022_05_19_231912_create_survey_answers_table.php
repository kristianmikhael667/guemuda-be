<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSurveyAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('survey_answers', function (Blueprint $table) {
            $table->id();
            $table->string('Webinar');
            $table->string('webinar_slug');
            $table->string('nama');
            $table->string('email');
            $table->string('tempat_lahir');
            $table->string('tanggal_lahir');
            $table->string('jenis_kelamin');
            $table->string('hobby');
            $table->string('pekerjaan');
            $table->string('provinsi');
            $table->string('kota');
            $table->string('kecamatan');
            $table->string('kelurahan');
            $table->text('alamat');
            $table->text('survey_question1')->nullable();
            $table->text('survey_answers1')->nullable();
            $table->text('survey_question2')->nullable();
            $table->text('survey_answers2')->nullable();
            $table->text('survey_question3')->nullable();
            $table->text('survey_answers3')->nullable();
            $table->text('survey_question4')->nullable();
            $table->text('survey_answers4')->nullable();
            $table->text('survey_question5')->nullable();
            $table->text('survey_answers5')->nullable();
            $table->text('survey_question6')->nullable();
            $table->text('survey_answers6')->nullable();
            $table->text('survey_question7')->nullable();
            $table->text('survey_answers7')->nullable();
            $table->text('survey_question8')->nullable();
            $table->text('survey_answers8')->nullable();
            $table->text('survey_question9')->nullable();
            $table->text('survey_answers9')->nullable();
            $table->text('survey_question10')->nullable();
            $table->text('survey_answers10')->nullable();
            $table->timestamps();
            $table->softDeletes($column = 'deleted_at', $precision = 0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('survey_answers');
    }
}
