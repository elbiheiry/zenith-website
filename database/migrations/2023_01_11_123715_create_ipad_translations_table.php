<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateIpadTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ipad_translations', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->unsignedBigInteger('ipad_id');
            $table->string('locale')->index();
            $table->unique(['ipad_id', 'locale']);
            $table->foreign('ipad_id')->references('id')->on('ipads')->onDelete('cascade');
            $table->timestamps();
        });

        DB::table('ipad_translations')->insert([
            'title' => 'title',
            'description' => 'description',
            'locale' => 'en',
            'ipad_id' => 1
        ]);

        DB::table('ipad_translations')->insert([
            'title' => 'title',
            'description' => 'description',
            'locale' => 'ar',
            'ipad_id' => 1
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ipad_translations');
    }
}
