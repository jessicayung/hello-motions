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
        Schema::create('Motions_Table', function (Blueprint $table) {
            $table->increments('id');
            $table->date('Date')->nullable();
            $table->varchar('Circuit', 50)->nullable();
            $table->varchar('Country', 50)->nullable();
            $table->varchar('Tournament', 200)->nullable();
            $table->varchar('CA_1', 50)->nullable();            
            $table->varchar('CA_2', 50)->nullable();            
            $table->varchar('CA_3', 50)->nullable();            
            $table->varchar('CA_4', 50)->nullable();            
            $table->varchar('CA_5', 50)->nullable();            
            $table->varchar('CA_6', 50)->nullable();            
            $table->varchar('CA_7', 50)->nullable();                        
            $table->varchar('Round_Code', 50)->nullable();
            $table->varchar('Round', 50)->nullable();
            $table->varchar('Motion', 500);
            $table->varchar('Infoslide', 1000)->nullable();
            $table->varchar('Topic_Area_1', 50)->nullable();
            $table->varchar('Topic_Area_2', 50)->nullable();
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
