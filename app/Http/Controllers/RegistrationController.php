<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterForm;
use App\Http\Requests\LoginForm;
use App\User; 
use \Auth;

class RegistrationController extends Controller
{
    
    function register() {


        return view('registration.register');
    }

    function postRegister( RegisterForm $request ) {

        User::create($request->all());

        return redirect( route('login') );

    }

    function login() {

        return view('registration.login');
    }

    function postLogin( LoginForm $request ) {


            $email = $request->get('email');
            $password = $request->get('password');

            $credentials = ['email' => $email,'password' => $password ];

             if ( Auth::attempt( $credentials ) ) {

                return \Redirect::intended('product/list');
             }


    }



}
