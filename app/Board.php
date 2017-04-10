<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
     protected $fillable = ['title','body','user_id','ip'];

     public function user(){
     	return $this->belongsTo(User::class);
     }
}
