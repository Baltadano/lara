<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Fundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as Auth;
use Laravel\Socialite\Facades\Socialite as Socialite;
use Exception;
//use Socialite;

//use App\Providers\RouteServiceProvider;
//use Illuminate\Foundation\Auth\AuthenticatesUsers;


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

   /* public function __construct()
    {
       $this->middleware('guest')->except('logout');
   }*/
    
     public function index(){
       return view('auth/login'); 
    }

    public function login()
    {
        return Socialite::driver('facebook')->redirect();
    }
    /**
* Redirecciona al usuario a la página de Facebook para autenticarse
*
* @return \Illuminate\Http\Response
*/
    public function redirectToFacebookProvider(){
        
        return Socialite::driver('facebook')->redirect();

    } 

    /**
* Obtiene la información de Facebook
*
* @return \Illuminate\Http\RedirectResponse

*/
public function handleProviderFacebookCallback(){
    try{
        clearstatcache();
    $auth_user = Socialite::driver('facebook')->user();//Fetch autenticated user 
        dd($auth_user);
    }catch(Exception $e){
        dd($e -> getMessage());
}
    
    }

public function showViewTest(){
        return view('auth/welcome');
    }
public function logout(Request $request)
{
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect("login"); 
}


}
