<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideoCommunitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('video_communities', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->bigInteger('category_id');
            $table->text('tags_id');
            $table->string('slug')->unique();
            $table->uuid('uid_user');
            $table->string('uid_user_2')->change();
            $table->string('thumbnails', 2048)->nullable();
            $table->string('video', 4048)->nullable();
            $table->string('link');
            $table->text('description');
            $table->text('subdesc');
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
        Schema::dropIfExists('video_communities');
    }
}
