<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameColumnsInBiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bios', function (Blueprint $table) {
            $table->renameColumn('univer', 'ru_univer');
            $table->renameColumn('intern', 'ru_intern');
            $table->renameColumn('aspirant', 'ru_aspirant');
            $table->renameColumn('departments', 'ru_departments');
            $table->renameColumn('courses', 'ru_courses');
            $table->renameColumn('practic_interes', 'ru_practic_interes');
            $table->renameColumn('research_interes', 'ru_research_interes');
            $table->renameColumn('society', 'ru_society');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bios', function (Blueprint $table) {
            $table->renameColumn('ru_univer', 'univer');
            $table->renameColumn('ru_intern', 'intern');
            $table->renameColumn('ru_aspirant', 'aspirant');
            $table->renameColumn('ru_departments', 'departments');
            $table->renameColumn('ru_courses', 'courses');
            $table->renameColumn('ru_practic_interes', 'practic_interes');
            $table->renameColumn('ru_research_interes', 'research_interes');
            $table->renameColumn('ru_society', 'society');
        });
    }
}
