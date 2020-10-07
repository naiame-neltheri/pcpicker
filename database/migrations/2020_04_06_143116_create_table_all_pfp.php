<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableAllPfp extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_all_pfp', function (Blueprint $table) {
            $table->id();
            $table->string('price');
            $table->text('description');
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
            $table->unsignedBigInteger('os_id');
            $table->unsignedBigInteger('sftr_id');
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
        Schema::dropIfExists('table_all_pfp');
    }
}
