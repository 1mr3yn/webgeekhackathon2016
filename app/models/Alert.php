<?php

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
  
}
