<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommunityGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('community_groups', function (Blueprint $table) {
            $table->id();
            $table->string('namegroup');
            $table->string('profile', 2048)->nullable();
            $table->string('linkwa');
            $table->string('linktele');
            $table->string('linktwit');
            $table->string('linkig');
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
        Schema::dropIfExists('community_groups');
    }
}
