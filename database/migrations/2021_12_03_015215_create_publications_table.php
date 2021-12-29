<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publications', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->date('date')->nullable();
            $table->string('ru_header')->required();
            $table->string('en_header')->nullable();
            $table->text('biblio')->required();
            $table->string('doi')->nullable();
            $table->text('ru_abstract')->required();
            $table->text('en_abstract')->nullable();
            $table->string('int_url')->required();
            $table->string('ext_url')->required();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('publications');
    }
}
