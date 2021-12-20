<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->integer('user_id');
            $table->integer('book_id');
            $table->date('bookdate');
            $table->date('returndate');
            $table->integer('days')->nullable();
            $table->string('ip')->nullable();
            $table->string('note')->nullable();
            $table->string('status', 30)->default('New');
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
        Schema::dropIfExists('reservations');
    }
}
