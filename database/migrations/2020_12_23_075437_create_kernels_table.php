<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKernelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kernels', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('phone_id')->unsigned();
            $table->string('name');
            $table->string('description');
            $table->string('link');
            $table->string('version');
            $table->string('android_version');
            $table->string('developer');
            $table->string('date');
            $table->foreign('phone_id')->references('id')->on('phones');
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
        Schema::dropIfExists('kernels');
    }
}
