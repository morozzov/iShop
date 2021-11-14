<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class UsersController extends Controller
{
    public function signin()
    {
        return view('users.signin');
    }

    public function settings()
    {
        $user = Session::get('user');
        return view('users.settings')->with('user', $user);
    }

    public function signinCheck(Request $request)
    {
        $login = $request->input('login');
        $password = $request->input('password');

        $user = DB::table('users')->where(
            [
                ['login', '=', $login],
                ['password', '=', $password],
            ]
        )->first();


        if ($user == null) {
            return "error";
        } else {
            Session::put('user', $user);
            return redirect('/');
        }
    }

    public function save(Request $request)
    {
        $user = Session::get('user');

        $login = $request->input('login');
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
        $password2 = $request->input('password2');


        if ($password != null) {
            if ($password == $password2) {

                $affected = User::where('id', '=', $user->id)->update(['login' => $login,'name' => $name, 'email' => $email, 'password' => $password]);
            }
        } else {
            $affected = User::where('id', '=', $user->id)->update(['name' => $login, 'email' => $email]);
        }



        $user = DB::table('users')->where(
            [
                ['id', '=', $user->id]
            ]
        )->first();
        if ($user == null) {
            return "error";
        } else {
            Session::put('user', $user);
            return redirect('/');
        }
    }

    public function privateZone()
    {
        return "privateZone";
    }

    public function logout()
    {
        Session::forget('user');
        return redirect('/');
    }
}
