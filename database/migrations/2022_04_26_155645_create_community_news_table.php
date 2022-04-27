<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommunityNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('community_news', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->bigInteger('category_id');
            $table->text('tags_id');
            $table->string('slug')->unique();
            $table->uuid('uid_user');
            $table->string('uid_user_2')->change();
            $table->string('avatar', 2048)->nullable();
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
        Schema::dropIfExists('community_news');
    }
}
