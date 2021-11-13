<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->datetime('dob');
            $table->unsignedBigInteger('birthnumber_id');
            $table->foreign('birthnumber_id')
            ->references('id')
            ->on('birthnumbers');

            $table->unsignedBigInteger('quality_id');
            $table->foreign('quality_id')
            ->references('id')
            ->on('qualities');

            $table->unsignedBigInteger('destinynumber');

            $table->unsignedBigInteger('zodiac_id');
            $table->foreign('zodiac_id')
            ->references('id')
            ->on('zodiacs');


            $table->unsignedBigInteger('luckycolors_id');
            $table->foreign('luckycolors_id')
            ->references('id')
            ->on('luckycolors');

            $table->unsignedBigInteger('friendlynumbers_id');
            $table->foreign('friendlynumbers_id')
            ->references('id')
            ->on('friendlynumbers');


            $table->unsignedBigInteger('unfriendlynumbers_id');
            $table->foreign('unfriendlynumbers_id')
            ->references('id')
            ->on('unfriendlynumbers');


            $table->unsignedBigInteger('neutralnumbers_id');
            $table->foreign('neutralnumbers_id')
            ->references('id')
            ->on('neutralnumbers');


            $table->unsignedBigInteger('luckydates_id');
            $table->foreign('luckydates_id')
            ->references('id')
            ->on('luckydates');


            $table->unsignedBigInteger('personalyear_id');
            $table->foreign('personalyear_id')
            ->references('id')
            ->on('personalyears');

            $table->unsignedBigInteger('profession_id');
            $table->foreign('profession_id')
            ->references('id')
            ->on('professions');

            $table->unsignedBigInteger('element_id');
            $table->foreign('element_id')
            ->references('id')
            ->on('elements');

         

            $table->unsignedBigInteger('auspiciousdays_id');
            $table->foreign('auspiciousdays_id')
            ->references('id')
            ->on('auspiciousdays');
            
            $table->unsignedBigInteger('auspiciousmonths_id');
            $table->foreign('auspiciousmonths_id')
            ->references('id')
            ->on('auspiciousmonths');


            $table->text('mobile_flat_car')->default('-');
            $table->unsignedBigInteger('deities_id');
            $table->foreign('deities_id')
            ->references('id')
            ->on('deities');

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
        Schema::dropIfExists('clients');
    }
}
