<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePrtOptDrv extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prt_opt_drv', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('price');
            $table->integer('bd')->nullable();
            $table->integer('dvd')->nullable();
            $table->integer('cd')->nullable();
            $table->string('bd_write')->nullable();
            $table->string('dvd_write')->nullable();
            $table->string('cd_write')->nullable();
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
        Schema::dropIfExists('prt_opt_drv');
    }
}
