<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIndexToPublsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('publs', function (Blueprint $table) {
            $table->unique('doi');
            $table->unique('biblio');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('publs', function (Blueprint $table) {
            $table->dropUnique('publs_doi_unique');
            $table->dropUnique('publs_biblio_unique');
        });
    }
}
