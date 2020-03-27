<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blocks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('page_id');
            $table->text('img')->nullable();
            $table->text('title');
            $table->text('description')->nullable();
            $table->text('short_description')->nullable();
            $table->text('link_title')->nullable();
            $table->text('link')->nullable();
            $table->text('position')->nullable();
            $table->text('is_visible')->nullable();
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
        Schema::dropIfExists('blocks');
    }
}
