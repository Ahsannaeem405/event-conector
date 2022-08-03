<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('owner_id')->constrained('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('package_id')->constrained('packages')->onDelete('cascade')->onUpdate('cascade');
            $table->date('event_date')->nullable();
            $table->time('event_start')->nullable();
            $table->time('event_end')->nullable();
            $table->integer('person')->nullable();
            $table->integer('bill')->nullable();
            $table->text('status')->default('pending');
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
        Schema::dropIfExists('bookings');
    }
}
