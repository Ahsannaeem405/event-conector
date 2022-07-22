<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('planner_id')->unsigned()->index()->nullable();
            $table->foreign('planner_id')->references('id')->on('users')->onDelete('cascade');

            $table->bigInteger('restaurant_id')->unsigned()->index()->nullable();
            $table->foreign('restaurant_id')->references('id')->on('restaurants')->onDelete('cascade');

            $table->string('pkg_name')->nullable();
            $table->integer('mem_allow')->nullable();
            $table->string('price_for')->nullable();
            $table->string('amount')->nullable();
            $table->text('desc')->nullable();
            $table->text('logo')->nullable();
            $table->string('holiday1')->nullable();
            $table->string('holiday2')->nullable();
            $table->string('holiday3')->nullable();
            $table->string('holiday4')->nullable();
            $table->string('holiday5')->nullable();
            $table->string('holiday6')->nullable();
            $table->string('holiday7')->nullable();
            $table->string('availalltime')->nullable();

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
        Schema::dropIfExists('packages');
    }
}
