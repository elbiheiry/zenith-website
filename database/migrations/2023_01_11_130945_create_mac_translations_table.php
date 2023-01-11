<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateMacTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mac_translations', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->unsignedBigInteger('mac_id');
            $table->string('locale')->index();
            $table->unique(['mac_id', 'locale']);
            $table->foreign('mac_id')->references('id')->on('macs')->onDelete('cascade');
            $table->timestamps();
        });

        DB::table('mac_translations')->insert([
            'title' => 'title',
            'description' => 'description',
            'locale' => 'en',
            'mac_id' => 1
        ]);

        DB::table('mac_translations')->insert([
            'title' => 'title',
            'description' => 'description',
            'locale' => 'ar',
            'mac_id' => 1
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mac_translations');
    }
}
