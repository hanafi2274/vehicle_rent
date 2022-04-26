<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGasUsage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gas_usage', function (Blueprint $table) {
            $table->increments('id');
            $table->string('liter_per_day');
            $table->unsignedInteger('usage_id');
            $table->foreign('usage_id')->references('id')->on('usage')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gas_usage');

    }
}
