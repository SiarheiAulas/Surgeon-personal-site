<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddEnColumnsToBiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bios', function (Blueprint $table) {
            $table->text('en_univer')->required();
            $table->text('en_intern')->required();
            $table->text('en_aspirant')->required();
            $table->text('en_departments')->required();
            $table->text('en_courses')->required();
            $table->text('en_practic_interes')->required();
            $table->text('en_research_interes')->required();
            $table->text('en_society')->required();
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
            $table->dropColumn(['en_univer','en_intern','en_aspirant','en_departments', 'en_courses', 'en_practic_interes', 'en_research_interes', 'en_society']);
        });
    }
}
