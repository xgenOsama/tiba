<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
  public function resturant()
  {
      return $this->belongsTo('App\Resturant');
  }
}
