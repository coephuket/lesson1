<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','level'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function board() {
        return $this->hasMany(Board::class);
    }

    public function owns($user, $board) {
        return $user->id == $board->user_id;
    }

    public function isSuperAdmin($user) {
        return $user->level == 'admin';
    }
}
