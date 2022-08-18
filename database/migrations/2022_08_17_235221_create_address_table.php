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
        Schema::create('address', function (Blueprint $table) {
            $table->id();
            $table->string('street', 100);
            $table->string('city', 100);
            $table->string('state', 100);
            $table->string('zip', 100);
            $table->string('neighborhood', 100);
            $table->string('country', 100);
            $table->string('number', 20);
            $table->string('complement', 100);
            $table->enum('type', ['home', 'work', 'other']);
            $table->timestamps();
            $table->unsignedBigInteger('users_id');
            $table->foreign('users_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('address');
    }
};
