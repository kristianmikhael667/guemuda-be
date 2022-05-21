<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePremiumViewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('premium_views', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_post');
            $table->string('titleslug');
            $table->string('url');
            $table->string('session_id');
            $table->string('user_id');
            $table->string('ip');
            $table->string('agent');
            $table->string('platform');
            $table->string('device');
            $table->bigInteger('category_ids');
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
        Schema::dropIfExists('premium_views');
    }
}
