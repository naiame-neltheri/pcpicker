<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablepfpOptDrv extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pfp_opt_drv', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('price')->nullable();
            $table->string('description')->nullable();
            $table->string('bd')->nullable();
            $table->string('dvd')->nullable();
            $table->string('cd')->nullable();
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
        Schema::dropIfExists('pfp_opt_drv');
    }
}
