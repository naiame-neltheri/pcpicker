<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeTableSomeTableRename extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::rename('prt_cpu', 'rccm_cpu');
        Schema::rename('prt_cpu_cooler', 'rccm_cpu_cooler');
        Schema::rename('prt_motherboard', 'rccm_motherboard');
        Schema::rename('prt_memory', 'rccm_memory');
        Schema::rename('prt_storage', 'rccm_storage');
        Schema::rename('prt_v_card', 'rccm_v_card');
        Schema::rename('prt_case', 'rccm_case');
        Schema::rename('prt_p_supply', 'rccm_p_supply');
        Schema::rename('prt_opt_drv', 'rccm_opt_drv');
        Schema::rename('prt_ext_strg', 'rccm_ext_strg');
        Schema::rename('prt_monitor', 'rccm_monitor');
        Schema::rename('os_system', 'rccm_os_system');
        Schema::rename('software', 'rccm_software');
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
