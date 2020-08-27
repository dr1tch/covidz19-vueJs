<?php

namespace App;
use App\User;

use Illuminate\Database\Eloquent\Model;

class Ideas extends Model
{
    public function user(){
      return $this->belongsTo(User::class);
    }
}
