<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateAppleContentTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apple_content_translations', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->unsignedBigInteger('apple_content_id');
            $table->string('locale')->index();
            $table->unique(['apple_content_id', 'locale']);
            $table->foreign('apple_content_id')->references('id')->on('apple_contents')->onDelete('cascade');
            $table->timestamps();
        });

        DB::table('apple_content_translations')->insert([
            'title' => 'title',
            'description' => 'description',
            'locale' => 'en',
            'apple_content_id' => 1
        ]);

        DB::table('apple_content_translations')->insert([
            'title' => 'title',
            'description' => 'description',
            'locale' => 'ar',
            'apple_content_id' => 1
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apple_content_translations');
    }
}
