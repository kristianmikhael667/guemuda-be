<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLikomvisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('likomvis', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->uuid('uid_content');
            $table->uuid('uid_user');
            $table->integer('total_like');
            $table->integer('total_view');
            $table->integer('total_comment');
            $table->string('comment');
            $table->string('like');
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
        Schema::dropIfExists('likomvis');
    }
}
