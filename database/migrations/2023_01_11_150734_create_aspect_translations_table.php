<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateAspectTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aspect_translations', function (Blueprint $table) {
            $table->id();
            $table->text('description');
            $table->unsignedBigInteger('aspect_id');
            $table->string('locale')->index();
            $table->unique(['aspect_id', 'locale']);
            $table->foreign('aspect_id')->references('id')->on('aspects')->onDelete('cascade');
            $table->timestamps();
        });

        DB::table('aspect_translations')->insert([
            'description' => 'description',
            'aspect_id' => 1,
            'locale' => 'en'
        ]);
        DB::table('aspect_translations')->insert([
            'description' => 'description',
            'aspect_id' => 1,
            'locale' => 'ar'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aspect_translations');
    }
}
