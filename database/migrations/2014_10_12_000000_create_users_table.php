<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->string('name')->nullable();
            $table->string('password')->nullable();
            $table->integer('phone')->unique();
            $table->integer('role');
            $table->string('verify_code')->nullable();
            $table->string('verify_expiration')->nullable();
            $table->tinyInteger('verify_code_status')->default(0);
            $table->double('balans')->nullable();
            $table->unsignedBigInteger('shop_id')->nullable();
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('shop_id')->on('shops')->references('id');
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
};
