<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Session;
use App\TipoUsuario;
use App\User;
use Illuminate\Support\Facades\Auth;

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
        $this->middleware('guest')->except('logout');
    }


    protected function authenticated(Request $request, $user)
    {
        $request->validate([
            'email' => 'required|email|regex:/^([\da-z_\-.]+)@([\da-z\-.]+)\.([a-z\-.]{1,})$/i'
        ]);
        
        //coloco el tipo de usuario como rol en una session con todos los datos de USER
        Session::put(Auth()->user()->role->nombre,Auth()->user());
    }

    public function logout(Request $request)    
    {
        $this->guard()->logout();
        Session::flush();
        Session::regenerate();
        $request->session()->invalidate();

        return $this->loggedOut($request) ?: redirect('/');
    }
}
