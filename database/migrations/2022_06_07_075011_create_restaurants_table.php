<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestaurantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurants', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('planner_id')->unsigned()->index()->nullable();
            $table->foreign('planner_id')->references('id')->on('users')->onDelete('cascade');
            
            $table->string('categoryid')->nullable();
            $table->string('business')->nullable();
            $table->string('address')->nullable();
            $table->time('mondyopen')->nullable();
            $table->time('mondyclose')->nullable();
            $table->time('tuedyopen')->nullable();
            $table->time('tuedyclose')->nullable();
            $table->time('wedopen')->nullable();
            $table->time('wedclose')->nullable();
            $table->time('thurdyopen')->nullable();
            $table->time('thurdyclose')->nullable();
            $table->time('fridyopen')->nullable();
            $table->time('fridyclose')->nullable();
            $table->time('satdyopen')->nullable();
            $table->time('satdyclose')->nullable();
            $table->time('sundyopen')->nullable();
            $table->time('sundyclose')->nullable();

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
        Schema::dropIfExists('restaurants');
    }
}
