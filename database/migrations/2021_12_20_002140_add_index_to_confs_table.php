<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIndexToConfsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('confs', function (Blueprint $table) {
            $table->unique('ru_header');
            $table->unique('en_header');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('confs', function (Blueprint $table) {
            $table->dropUnique('confs_ru_header_unique');
            $table->dropUnique('confs_en_header_unique');
        });
    }
}
