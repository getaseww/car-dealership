<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable=[
        'user_id','count_view','is_approved','phone','model','make','price','price_type','condition','year','engine_size','transmission','color','engine_type','description','photo'
     ];
 
     public function user(){
         return $this->belongsTo('App\User');
     }
}
