<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('imgurl');
            $table->string('name')->unique();
            $table->text('description');
            $table->string('country');
            $table->string('location');
            $table->integer('large');
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
        Schema::dropIfExists('forests');
    }
}
