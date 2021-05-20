<?php
namespace App\Services;
use App\Models\User;

class LoginService{
	public function checkusername($username)
    {
       return User::where(['name'=>$username])->first(); 
    }
}