<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePrtExtStrg extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prt_ext_strg', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('price');
            $table->string('type')->nullable();
            $table->string('interface')->nullable();
            $table->string('capacity')->nullable();
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
        Schema::dropIfExists('prt_ext_strg');
    }
}
