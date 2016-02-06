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
            $table->text('Circuit', 50);
            $table->text('Country', 50);
            $table->text('Tournament', 200);
            $table->text('CA_1', 50);            
            $table->text('CA_2', 50);            
            $table->text('CA_3', 50);            
            $table->text('CA_4', 50);            
            $table->text('CA_5', 50);            
            $table->text('CA_6', 50);            
            $table->text('CA_7', 50);                        
            $table->text('Round_Code', 50);
            $table->text('Round', 50);
            $table->text('Motion', 500);
            $table->text('Infoslide', 1000);
            $table->text('Topic_Area_1', 50);
            $table->text('Topic_Area_2', 50);
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
