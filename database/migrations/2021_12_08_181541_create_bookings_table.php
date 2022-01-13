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
            $table->string('from');
            $table->string('to');
            $table->integer('suitecaseNum')->default(0);
            $table->integer('personsNum');
            $table->enum('choiceTaxi', ['standard', 'VIP'])->default('standard');
            $table->string('time');
            $table->string('seigeEnfant');
            $table->string('vol')->nullable();
            // $table->enum('payment', ['cash', 'visa'])->default('cash');
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