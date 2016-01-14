<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddExcerptToCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('category', function (Blueprint $table) {
            //
            $table->string('image_title')->length(255)->nulable();
            $table->string('image_path')->length(255)->nulable();
        });c;
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('category', function (Blueprint $table) {

            //
            $table->dropColumn('image_title');
            $table->dropColumn('image_path');
        });
    }
}
