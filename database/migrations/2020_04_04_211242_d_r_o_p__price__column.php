<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DROPPriceColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('prt_cpu', function (Blueprint $table) { $table->dropColumn('price'); });
        Schema::table('prt_cpu_cooler', function (Blueprint $table) { $table->dropColumn('price'); });
        Schema::table('prt_motherboard', function (Blueprint $table) { $table->dropColumn('price'); });
        Schema::table('prt_memory', function (Blueprint $table) { $table->dropColumn('price'); });
        Schema::table('prt_storage', function (Blueprint $table) { $table->dropColumn('price'); });
        Schema::table('prt_v_card', function (Blueprint $table) { $table->dropColumn('price'); });
        Schema::table('prt_case', function (Blueprint $table) { $table->dropColumn('price'); });
        Schema::table('prt_p_supply', function (Blueprint $table) { $table->dropColumn('price'); });
        Schema::table('prt_opt_drv', function (Blueprint $table) { $table->dropColumn('price'); });
        Schema::table('prt_ext_strg', function (Blueprint $table) { $table->dropColumn('price'); });
        Schema::table('prt_monitor', function (Blueprint $table) { $table->dropColumn('price'); });
        Schema::table('os_system', function (Blueprint $table) { $table->dropColumn('price'); });
        Schema::table('software', function (Blueprint $table) { $table->dropColumn('price'); });
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
