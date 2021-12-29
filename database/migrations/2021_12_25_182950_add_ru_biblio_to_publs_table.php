<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRuBiblioToPublsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('publs', function (Blueprint $table) {
            $table->renameColumn('biblio','ru_biblio');
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
            $table->renameColumn('ru_biblio','biblio');
        });
    }
}
