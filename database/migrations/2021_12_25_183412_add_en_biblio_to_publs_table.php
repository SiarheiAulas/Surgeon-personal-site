<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddEnBiblioToPublsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('publs', function (Blueprint $table) {
            $table->text('en_biblio')->required()->after('ru_biblio');
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
            $table->dropColumn('en_biblio');
        });
    }
}
