<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableImages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('build_images', function (Blueprint $table) {
            $table->id();
            $table->string('image_path')->nullable();
            $table->unsignedBigInteger('pcpu_id');
            $table->unsignedBigInteger('pcpuclr_id');
            $table->unsignedBigInteger('mbrd_id');
            $table->unsignedBigInteger('mmr_id');
            $table->unsignedBigInteger('str_id');
            $table->unsignedBigInteger('vcrd_id');
            $table->unsignedBigInteger('pcs_id');
            $table->unsignedBigInteger('sppl_id');
            $table->unsignedBigInteger('optdrv_id');
            $table->unsignedBigInteger('exsrtg_id');
            $table->unsignedBigInteger('mntr_id');
            $table->timestamps();

            $table->foreign('pcpu_id')->references('id')->on('prt_cpu');
            $table->foreign('pcpuclr_id')->references('id')->on('prt_cpu_cooler');
            $table->foreign('mbrd_id')->references('id')->on('prt_motherboard');
            $table->foreign('mmr_id')->references('id')->on('prt_memory');
            $table->foreign('str_id')->references('id')->on('prt_storage');
            $table->foreign('vcrd_id')->references('id')->on('prt_v_card');
            $table->foreign('pcs_id')->references('id')->on('prt_case');
            $table->foreign('sppl_id')->references('id')->on('prt_p_supply');
            $table->foreign('optdrv_id')->references('id')->on('prt_opt_drv');
            $table->foreign('exsrtg_id')->references('id')->on('prt_ext_strg');
            $table->foreign('mntr_id')->references('id')->on('prt_monitor');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('build_images');
    }
}
