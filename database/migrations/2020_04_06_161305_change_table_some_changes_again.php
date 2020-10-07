<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeTableSomeChangesAgain extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pfp_cpu', function (Blueprint $table) { $table->unsignedBigInteger('user_id'); });
        Schema::table('pfp_cpu_cooler', function (Blueprint $table) { $table->unsignedBigInteger('user_id'); });
        Schema::table('pfp_motherboard', function (Blueprint $table) { $table->unsignedBigInteger('user_id'); });
        Schema::table('pfp_memory', function (Blueprint $table) { $table->unsignedBigInteger('user_id'); });
        Schema::table('pfp_storage', function (Blueprint $table) { $table->unsignedBigInteger('user_id'); });
        Schema::table('pfp_v_card', function (Blueprint $table) { $table->unsignedBigInteger('user_id'); });
        Schema::table('pfp_case', function (Blueprint $table) { $table->unsignedBigInteger('user_id'); });
        Schema::table('pfp_p_supply', function (Blueprint $table) { $table->unsignedBigInteger('user_id'); });
        Schema::table('pfp_opt_drv', function (Blueprint $table) { $table->unsignedBigInteger('user_id'); });
        Schema::table('pfp_ext_strg', function (Blueprint $table) { $table->unsignedBigInteger('user_id'); });
        Schema::table('pfp_monitor', function (Blueprint $table) { $table->unsignedBigInteger('user_id'); });
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
