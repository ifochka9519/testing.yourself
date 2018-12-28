<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function dashboard()
    {
        return view('dashboard');
    }
    public function register(Request $request)
    {
        $this->validate($request,[
           'email'=> 'required|unique:users',
           'name'=> 'required|max:100',
           'password'=> 'required|min:6'
        ]);


        $user = new User();
        $user->name = $request['name'];
        $user->password = bcrypt($request['password']);
        $user->email = $request['email'];

        $user->save();

        Auth::login($user);
        MailController::send($user);

        return redirect()->route('dashboard');
    }

    public function login(Request$request){

        $this->validate($request,[
            'email'=> 'required',
            'password'=> 'required'
        ]);


        if (Auth::attempt(['email'=> $request['email'], 'password'=> $request['password']])){
            return redirect()->route('dashboard');
        }
        return redirect()->back();
    }

    public function logOut()
    {
        Auth::logout();
        return redirect('/login');
    }

}
