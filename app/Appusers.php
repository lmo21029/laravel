<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appusers extends Model
{
        public static function rules ($id=0) {
        return [
        'name' => 'required|between:2,100',
        'devices_limit' => 'required',
        'email' => 'required|email|unique:users,email' . ($id ? ",$id" : ''),
       
        
        ];
    }
    

       	protected $table = 'app_users';

	public function users()
	{
		return $this->hasMany('User');
	}
}
