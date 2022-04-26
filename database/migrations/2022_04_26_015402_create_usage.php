<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usage', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date');
            $table->boolean('head_office_agreement')->nullable();
            $table->boolean('branch_office_agreement')->nullable();
            $table->unsignedInteger('head_office_manager');
            $table->foreign('head_office_manager')->references('id')->on('user')->onDelete('cascade');
            $table->unsignedInteger('branch_office_manager');
            $table->foreign('branch_office_manager')->references('id')->on('user')->onDelete('cascade');
            $table->unsignedInteger('driver');
            $table->foreign('driver')->references('id')->on('user')->onDelete('cascade');
            $table->unsignedInteger('vehicle');
            $table->foreign('vehicle')->references('id')->on('vehicle')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usage');

    }
}
