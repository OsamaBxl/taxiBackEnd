<?php

use App\Enums\PaymentStatus;
use App\Enums\RefundStatus;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking_transactions', function (Blueprint $table) {
            $table->id();
            $table->integer("booking_id")->unique();
            $table->string("payment_id");
            $table->tinyInteger("payment_status")->default(PaymentStatus::INIT)->index();
            $table->tinyInteger("refund_status")->default(RefundStatus::INIT)->index();
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
        Schema::dropIfExists('booking_transactions');
    }
}