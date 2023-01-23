<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoryTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('story_translations', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->unsignedBigInteger('story_id');
            $table->string('locale')->index();
            $table->unique(['story_id', 'locale']);
            $table->foreign('story_id')->references('id')->on('stories')->onDelete('cascade'); 
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
        Schema::dropIfExists('story_translations');
    }
}
