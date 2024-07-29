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
        Schema::create('shops', function (Blueprint $table) {
//            'name','phone','address_name','inn','lat','lang','open_time','close_time','img','info','balans'
            $table->id();
            $table->string('name');
            $table->string('phone');
            $table->string('address_name')->nullable();
            $table->string('inn')->nullable();
            $table->string('info')->nullable();
            $table->string('img')->nullable();
            $table->time('open_time')->nullable();
            $table->time('close_time')->nullable();
            $table->tinyInteger('status')->nullable();
            $table->double('balans')->nullable();
            $table->double('lat')->nullable();
            $table->double('lang')->nullable();

            $table->softDeletes();
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
        Schema::dropIfExists('shops');
    }
};
