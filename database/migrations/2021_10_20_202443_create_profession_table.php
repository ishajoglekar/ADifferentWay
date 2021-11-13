<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfessionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profession', function (Blueprint $table) {
            $table->id();
            $table->string('name');
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
        Schema::dropIfExists('profession');
    }
}
