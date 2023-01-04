<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('image1');
            $table->string('image2');
            $table->string('image3');
            $table->string('image4');
            $table->integer('clients');
            $table->integer('projects');
            $table->integer('partners');
            $table->timestamps();
        });

        DB::table('abouts')->insert([
            'image1' => 'image1.png',
            'image2' => 'image2.png',
            'image3' => 'image3.png',
            'image4' => 'image4.png',
            'clients' => 11000,
            'projects' => 6000,
            'partners' => 44
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('abouts');
    }
}
