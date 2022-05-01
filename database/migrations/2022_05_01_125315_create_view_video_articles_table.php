<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateViewVideoArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('view_video_articles', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("id_community");
            $table->string("titleslug");
            $table->string("url");
            $table->string("session_id");
            $table->string("user_id");
            $table->string("ip");
            $table->string("agent");
            $table->string("platform");
            $table->string("device");
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
        Schema::dropIfExists('view_video_articles');
    }
}
