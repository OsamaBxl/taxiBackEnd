<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Destinations extends Model
{
    protected $table = 'destinations';
    public $timestamps = false;
    protected $fillable = [
        'city_name'
    ];
}
