<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConferencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conferences', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->date('date')->required();
            $table->string('ru_header')->required();
            $table->string('en_header')->nullable();
            $table->text('ru_description')->required();
            $table->text('en_description')->nullable();
            $table->string('url_video')->nullable();
            $table->string('url_pdf')->required();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('conferences');
    }
}
