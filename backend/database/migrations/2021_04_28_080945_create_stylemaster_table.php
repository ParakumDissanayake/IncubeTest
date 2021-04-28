<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStylemasterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stylemaster', function (Blueprint $table) {
            $table->id();
            $table->string('style_code');
            $table->string('style_name');
            $table->integer('style_quantity');
            $table->string('style_status');
            $table->string('style_type');
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
        Schema::dropIfExists('stylemaster');
    }
}
