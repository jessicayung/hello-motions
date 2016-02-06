<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMotionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('motions', function (Blueprint $table) {
            $table->increments('id');
            $table->date('Date');
            $table->text('Circuit');
            $table->text('Country');
            $table->text('Tournament');
            $table->text('CA_1')            
            $table->text('Round_Code');
            $table->text('Round');
            $table->text('Motion');
            $table->text('Infoslide');
            $table->text('Topic_Area_1');
            $table->text('Topic_Area_2');
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
        Schema::drop('motions');
    }
}
