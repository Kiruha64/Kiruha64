<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSecondslidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('secondsliders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('background');
            $table->string('img');
            $table->string('title');
            $table->text('link_title');
            $table->text('link');
            $table->text('text');
            $table->string('is_visible');
            $table->string('position');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('secondsliders');
    }
}
