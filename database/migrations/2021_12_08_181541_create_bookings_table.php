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
            $table->string('fullName');
            $table->string('email');
            $table->string('phoneCode')->default('+32');
            $table->string('phoneNumber', 15);
            $table->enum('pickUp', ['Bruxelles ville', 'Bruxelles Aéroport', 'Charleroi aéroport', 'Ostende Aéroport', 'autre']);
            $table->string('otherAddressPick')->nullable();
            $table->enum('dropOff', ['Bruxelles ville', 'Bruxelles Aéroport', 'Charleroi aéroport', 'Ostende Aéroport', 'autre']);
            $table->string('otherAddressDrop')->nullable();
            $table->integer('suitecaseNum');
            $table->integer('personsNum');
            $table->enum('choiceTaxi', ['standard', 'VIP'])->default('standard');
            $table->string('time');
            $table->enum('payment', ['cash', 'visa'])->default('cash');
            $table->integer('estimation');
            $table->text('additionalInfo')->nullable();
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