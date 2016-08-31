<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Validator;
//use Illuminate\Support\Facades\Input;
//use Illuminate\Support\Facades\Redirect;
use App\User;
use Auth;
class AuthenticationController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth:api');
    }

    public function login(Request $request) {
        //$validator = Validator::make($request->all(), [
        //    'email' => 'required|max:255',
        //    'password' => 'required|max:255',
        //]);

        //if ($validator->fails()) {
        //    return redirect('/')
        //        ->withInput()
        //        ->withErrors($validator);
        //}

        $email = $request->input('email');
        $password = $request->input('password');

        $credentials = $request->only(['email','password']);

        $user = User::where('email','=',$email)->where('password', '=', $password)->first();


        if ($user) {
            return redirect('/notes');
        }
        else {
            return redirect('/');
        }

        //if(Auth::once(['email' => $email, 'password' => $password])) {
        //    return'logged in';
        //}
        //else {
        //    return 'not logged in';
        //}

        //$user = User::find($credentials);

        //if ($user) {
        //    return'logged in';
        //} else {
        //    return 'not logged in';
        //}
    }

    //
}
