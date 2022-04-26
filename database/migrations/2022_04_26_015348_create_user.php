<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('username')->unique();
            $table->string('password');
            $table->string('role');
            $table->unsignedInteger('head_office_id');
            $table->foreign('head_office_id')->references('id')->on('head_office')->onDelete('cascade');
            $table->unsignedInteger('branch_office_id');
            $table->foreign('branch_office_id')->references('id')->on('branch_office')->onDelete('cascade');
            $table->unsignedInteger('mine_office_id');
            $table->foreign('mine_office_id')->references('id')->on('mine_office')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user');

    }
}
