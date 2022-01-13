<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'bookings';

    protected $fillable = [
        'fullName', 'email', 'phoneCode', 'phoneNumber', 'from', 'to', 'seigeEnfant',
        'vol', 'suitecaseNum',  'personsNum', 'choiceTaxi', 'time',  'estimation', 'additionalInfo'
    ];
    protected $hidden = [
        'created_at', 'updated_at'
    ];
}