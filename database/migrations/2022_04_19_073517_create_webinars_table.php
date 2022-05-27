<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebinarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('webinars', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->nullable(false);
            $table->string('avatar', 2048)->nullable();
            $table->string('title');
            $table->text('description');
            $table->string('speaker');
            $table->string('speaker_2');
            $table->date('schedule');
            $table->string('category_event')->nullable();
            $table->string('tags_event')->nullable();
            $table->string('organizer');
            $table->string('moderator');
            $table->text('subdesc');
            $table->enum('status', ['active', 'non'])->default('active');
            $table->string('typewebinar');
            $table->string('address');
            $table->text('links_maps')->nullable();
            $table->decimal('latitude', 11, 8)->nullable();
            $table->decimal('longitude', 11, 8)->nullable();
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
            $table->string('slug')->unique();
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
        Schema::dropIfExists('webinars');
    }
}
