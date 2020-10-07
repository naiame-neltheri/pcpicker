<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DROPConstrantColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('build_images', function (Blueprint $table) {
            $table->dropForeign(['pcpu_id']);
            $table->dropForeign(['pcpuclr_id']);
            $table->dropForeign(['mbrd_id']);
            $table->dropForeign(['mmr_id']);
            $table->dropForeign(['str_id']);
            $table->dropForeign(['vcrd_id']);
            $table->dropForeign(['pcs_id']);
            $table->dropForeign(['sppl_id']);
            $table->dropForeign(['optdrv_id']);
            $table->dropForeign(['exsrtg_id']);
            $table->dropForeign(['mntr_id']);
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
