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
            $table->date('Date')->nullable();
            $table->string('Circuit', 50)->nullable();
            $table->string('Country', 50)->nullable();
            $table->string('Tournament', 200)->nullable();
            $table->string('CA_1', 50)->nullable();            
            $table->string('CA_2', 50)->nullable();            
            $table->string('CA_3', 50)->nullable();            
            $table->string('CA_4', 50)->nullable();            
            $table->string('CA_5', 50)->nullable();            
            $table->string('CA_6', 50)->nullable();            
            $table->string('CA_7', 50)->nullable();                        
            $table->string('Round_Code', 50)->nullable();
            $table->string('Round', 50)->nullable();
            $table->string('Motion', 500);
            $table->string('Infoslide', 1000)->nullable();
            $table->string('Topic_Area_1', 50)->nullable();
            $table->string('Topic_Area_2', 50)->nullable();
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
