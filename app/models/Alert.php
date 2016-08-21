<?php

use Carbon\Carbon;

class Alert extends Eloquent {

  protected $fillable = [
   'user_id',
   'lat',
   'lng',
   'type',
   'remarks',
   'created_at',
   'updated_at'
  ];

  public function user()
  {
     return $this->belongsTo('User');
  }

   public function getCreatedAtAttribute($value)
   { 
     return Carbon::createFromFormat('Y-m-d H:i:s', $value)->diffForHumans();
   }

   public function getRemarksAttribute($value)
   { 
     $remarks = '';
     if($value){
      $remarks = 'Unit Dispatched';
     }
     return $remarks;

   }

  
}
