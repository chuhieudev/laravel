<?php

namespace App\Http\Controllers;

use App\Models\User;

use App\Services\LoginService;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public $message,$error;
    protected $LoginService;
    public function __construct(LoginService $LoginService)
    {
     $this->LoginService=$LoginService;   
    }
    public function check(Request $Request)
    {
        $arr=[
            'email'=>$Request['Email'],
            'password'=>$Request['password']
        ];
        if(Auth::attempt($arr)){
            return redirect()->route('home');
        }else{
            return redirect()->back()->with('error','User account or password incorrect');
        }
    }
    public function processregister(Request $Request)
    {
        $user= new User;
        // dd($this->LoginService->checkusername($Request['username']));
        if($this->LoginService->checkusername($Request['username'])==null){
            $user->name=$Request['username'];
            $user->password=bcrypt($Request['password']);
            $user->email=$Request['email'];
            $user->phone=$Request['Phone'];
            $user->gender=$Request['gender'];
            $user->address=$Request['Address'];
            $user->save();
            return redirect('/login')->with('massage', 'Successful registration');
        }
        else {
            return redirect()->back()->with('error','This account already exists');
        }
    }
    public function processlogout(){
        Auth::logout();
        return redirect()->route('login'); 
    }
}
