<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Create1554707094262DrinksTable extends Migration
{
    public function up()
    {
        Schema::create('drinks', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('barista_id')->nullable();
            $table->foreign('barista_id')->references('id')->on('users');
            $table->unsignedInteger('drink_type_id')->nullable();
            $table->foreign('drink_type_id')->references('id')->on('drinks_types');
            $table->decimal('price', 15, 2)->nullable();
            $table->datetime('completed_at')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('drinks');
    }
}
