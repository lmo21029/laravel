<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    public static function rules ($id=0) {
        return [
        'name' => 'required|between:2,100',
        'email' => 'required|email|unique:users,email' . ($id ? ",$id" : ''),
        'password' => 'between:3,10',
        
        ];
    }
    
    protected $fillable = [
        'name', 'email', 'password',
    ];

   
    protected $hidden = [
        'password', 'remember_token',
    ];

}
