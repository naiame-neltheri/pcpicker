<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePrtVCard extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prt_v_card', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('price');
            $table->string('chipset')->nullable();
            $table->string('memory')->nullable();
            $table->string('coreclock')->nullable();
            $table->string('boostclock')->nullable();
            $table->string('interface')->nullable();
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
        Schema::dropIfExists('prt_v_card');
    }
}
