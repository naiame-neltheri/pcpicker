<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePrtMemory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prt_memory', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('price');
            $table->string('speed')->nullable();
            $table->string('type')->nullable();
            $table->string('modules')->nullable();
            $table->string('color')->nullable();
            $table->integer('cas_latency')->nullable();
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
        Schema::dropIfExists('prt_memory');
    }
}
