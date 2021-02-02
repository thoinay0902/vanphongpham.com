<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('role_id');
             $table->foreign('role_id')->references('id')->on('role_accesses')->onDelete('cascade');

            $table->string('fullname')->nullable();
            $table->string('username')->nullable();
            $table->string('password')->nullable();
            $table->string('adress')->nullable();
            $table->string('phone')->nullable();
            $table->string('sex')->nullable();
            $table->string('email')->nullable();
            $table->date('birthday')->nullable();
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
        Schema::dropIfExists('users');
    }
}
