<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropArticleVideo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::drop('video_articles');
        Schema::dropIfExists('video_articles');

        // Schema::drop('view_video_articles');
        // Schema::dropIfExists('view_video_articles');

        // Schema::drop('video_communities');
        // Schema::dropIfExists('video_communities');

        // Schema::drop('video_community_views');
        // Schema::dropIfExists('video_community_views');

        // Schema::drop('category_communities');
        // Schema::dropIfExists('category_communities');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
