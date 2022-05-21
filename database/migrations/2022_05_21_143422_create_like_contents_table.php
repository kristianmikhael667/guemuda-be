<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLikeContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('like_contents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_post')->constrained('contents')->onDelete('cascade');
            $table->foreignId('id_users')->constrained('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('like_contents');
    }
}
