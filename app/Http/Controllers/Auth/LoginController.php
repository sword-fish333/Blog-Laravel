<?php

namespace App\Http\Controllers\Auth;
namespace App\Repositories;
namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
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

    use AuthenticatesUsers{
        redirectPath as laravelRedirectPath;
    }

    public function redirectPath()
    {
        // Do your logic to flash data to session...
        session()->flash('logedin', 'Welcome  '."<span style='color: black;'><u><i>".Auth::user()->name."</i></u></span>");

        // Return the results of the method we are overriding that we aliased.
        return $this->laravelRedirectPath();
    }

    protected $redirectTo = '/home';


    public function __construct()
    {
        $this->middleware('guest', ['except' => ['logout', 'getLogout']]);
    }


    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/');
    }


}