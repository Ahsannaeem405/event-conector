<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddHoliday1ToRestaurantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('restaurants', function (Blueprint $table) {
            //
            $table->string('holiday1')->nullable();
            $table->string('holiday2')->nullable();
            $table->string('holiday3')->nullable();
            $table->string('holiday4')->nullable();
            $table->string('holiday5')->nullable();
            $table->string('holiday6')->nullable();
            $table->string('holiday7')->nullable();
            $table->string('availalltime')->nullable();

            

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('restaurants', function (Blueprint $table) {
            //
        });
    }
}
