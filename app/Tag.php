<?php

namespace App;

use App\Board;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function boards() {
    	return $this->belongsToMany(Board::class)->withTimeStamps();
    }
}
