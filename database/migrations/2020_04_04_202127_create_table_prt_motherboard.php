<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePrtMotherboard extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prt_motherboard', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('price');
            $table->string('socket_cpu')->nullable();
            $table->string('from_factor')->nullable();
            $table->integer('memory_max')->nullable();
            $table->integer('memory_slot')->nullable();
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
        Schema::dropIfExists('prt_motherboard');
    }
}
