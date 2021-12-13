<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'bookings';

    protected $fillable = [
        'fullName', 'email', 'phoneCode', 'phoneNumber', 'pickUp', 'otherAddressPick', 'dropOff', 'otherAddressDrop', 'suitecaseNum',
        'personsNum', 'choiceTaxi', 'time', 'payment', 'estimation', 'additionalInfo'
    ];
    protected $hidden = [
        'created_at', 'updated_at'
    ];
}
