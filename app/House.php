<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    protected $fillable=[
       'price','type','price_type','phone','address','bed_room','bath_room','kitchen','med_room','living_room','meter_square','photo','description',
    ];
    public function user(){
        return $this->belongsTo('App\User');
    }
}

