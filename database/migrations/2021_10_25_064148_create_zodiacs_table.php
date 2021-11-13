<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZodiacsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zodiacs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('element_id');
            $table->foreign('element_id')
            ->references('id')
            ->on('elements');
            
            $table->unsignedBigInteger('birthnumber_id');
            $table->foreign('birthnumber_id')
            ->references('id')
            ->on('birthnumbers');
            
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
        Schema::dropIfExists('zodiacs');
    }
}
