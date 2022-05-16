<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Addfields2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('community_news', function (Blueprint $table) {
            $table->enum('type', ['image', 'video']);
            $table->string('link_video');
            $table->string('thumbnail', 2048)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('community_news', function (Blueprint $table) {
            //
        });
    }
}
