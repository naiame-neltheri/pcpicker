<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePrtCase extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prt_case', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('price');
            $table->string('type')->nullable();
            $table->string('color')->nullable();
            $table->string('powersupply')->nullable();
            $table->string('sidepanelwindow')->nullable();
            $table->integer('external_bays')->nullable();
            $table->integer('internal_bays')->nullable();
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
        Schema::dropIfExists('prt_case');
    }
}
