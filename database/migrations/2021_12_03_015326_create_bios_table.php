<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bios', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('url_photo')->required();
            $table->text('univer')->required();
            $table->text('intern')->required();
            $table->text('aspirant')->required();
            $table->text('departments')->required();
            $table->text('courses')->required();
            $table->text('practic_interes')->required();
            $table->text('research_interes')->required();
            $table->text('society')->required();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bios');
    }
}
