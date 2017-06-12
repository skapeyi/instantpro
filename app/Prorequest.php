<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prorequest extends Model
{
   protected $fillable = ['user_id','email', 'description','when_needed','pro_id','price','status'];

   protected $attributes = []; 
}
