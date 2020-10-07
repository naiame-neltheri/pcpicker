<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePrtPSupply extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prt_p_supply', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('price');
            $table->string('from_factor')->nullable();
            $table->string('efficiency_rating')->nullable();
            $table->string('wattage')->nullable();
            $table->string('modular')->nullable();
            $table->string('color')->nullable();
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
        Schema::dropIfExists('prt_p_supply');
    }
}
