<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();   
            $table->foreignId('eventId');
            $table->foreignId('sectionId');
            $table->foreignId('userId');
            $table->integer('quantity');
            $table->integer('total_price');
            $table->timestamps();
            $table->foreign('eventId')->references('id')->on('events')->onDelete('cascade');
            $table->foreign('sectionId')->references('id')->on('event_sections')->onDelete('cascade');
            $table->foreign('userId')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
