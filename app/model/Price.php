<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
   
    protected $table = 'pricing_table';
    public $timestamps = false;
    protected $fillable = [
        'pick_from', 'pick_to', 'price',
    ];
    protected $hidden = [
        'created_at', 'updated_at'
    ];
}
