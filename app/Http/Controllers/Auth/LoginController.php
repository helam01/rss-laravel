<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }


    public function getLogin()
    {
        return view('public.login');
    }

    public function postLogin(Request $request)
    {
        $inputs = $request->all();

        if (Auth::attempt(['email' => $inputs['email'], 'password' => $inputs['password']])) {
            return redirect()->intended('home');

        } else {
             return redirect('/login')->with('alert',[
                'message' => 'Email ou senha inválidos',
                'type' => 'danger',
            ]);
        }
    }

    public function getLogout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
