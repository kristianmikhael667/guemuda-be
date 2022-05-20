<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePremiumContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('premium_contents', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('captions');
            $table->boolean('type');
            $table->string('slug')->unique();
            $table->bigInteger('uid_user');
            $table->string('uid_user_2');
            $table->string('image', 2048)->nullable();
            $table->string('thumbnail', 2048)->nullable();
            $table->bigInteger('category_id');
            $table->text('tags_id');
            $table->text('subdesc');
            $table->text('description');
            $table->string('link_audio');
            $table->string('link');
            $table->enum('status', ['active', 'non'])->default('active');
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
        Schema::dropIfExists('premium_contents');
    }
}
