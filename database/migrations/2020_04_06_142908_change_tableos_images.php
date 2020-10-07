<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeTableosImages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('build_images', function (Blueprint $table) {
            $table->unsignedBigInteger('pfp_id');
            $table->dropColumn('pcpu_id');
            $table->dropColumn('pcpuclr_id');
            $table->dropColumn('mbrd_id');
            $table->dropColumn('mmr_id');
            $table->dropColumn('str_id');
            $table->dropColumn('vcrd_id');
            $table->dropColumn('pcs_id');
            $table->dropColumn('sppl_id');
            $table->dropColumn('optdrv_id');
            $table->dropColumn('exsrtg_id');
            $table->dropColumn('mntr_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
