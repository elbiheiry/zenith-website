<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateInputsInApplceContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('apple_contents', function (Blueprint $table) {
            $table->string('image')->after('id');
        });

        Schema::table('ipads', function (Blueprint $table) {
            $table->string('image')->after('id');
        });

        Schema::table('macs', function (Blueprint $table) {
            $table->string('image')->after('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('applce_contents', function (Blueprint $table) {
            //
        });
    }
}
