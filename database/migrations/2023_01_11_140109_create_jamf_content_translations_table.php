<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateJamfContentTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jamf_content_translations', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->unsignedBigInteger('jamf_content_id');
            $table->string('locale')->index();
            $table->unique(['jamf_content_id', 'locale']);
            $table->foreign('jamf_content_id')->references('id')->on('jamf_contents')->onDelete('cascade');
            $table->timestamps();
        });

        DB::table('jamf_content_translations')->insert([
            'title' => 'title',
            'description' => 'description',
            'locale' => 'en',
            'jamf_content_id' => 1
        ]);

        DB::table('jamf_content_translations')->insert([
            'title' => 'title',
            'description' => 'description',
            'locale' => 'ar',
            'jamf_content_id' => 1
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jamf_content_translations');
    }
}
