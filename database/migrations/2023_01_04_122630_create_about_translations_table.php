<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateAboutTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_translations', function (Blueprint $table) {
            $table->id();
            $table->text('description1');
            $table->text('description2');
            $table->text('description3');
            $table->text('description4');
            $table->unsignedBigInteger('about_id');
            $table->string('locale')->index();
            $table->unique(['about_id', 'locale']);
            $table->foreign('about_id')->references('id')->on('abouts')->onDelete('cascade');
            $table->timestamps();
        });

        DB::table('about_translations')->insert([
            'description1' => '1',
            'description2' => '2',
            'description3' => '3',
            'description4' => '4',
            'locale' => 'en',
            'about_id' => 1
        ]);
        DB::table('about_translations')->insert([
            'description1' => '1',
            'description2' => '2',
            'description3' => '3',
            'description4' => '4',
            'locale' => 'ar',
            'about_id' => 1
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('about_translations');
    }
}
