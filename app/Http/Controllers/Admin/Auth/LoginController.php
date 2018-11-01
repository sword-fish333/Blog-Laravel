<?php


namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
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

    protected $redirectTo = '/admin/home';

    public function showLoginForm()
    {
        return view('admin.login');
    }
    public function login(Request $request)
    {   $posts=Post::orderByDesc('created_at')->get();
        $this->validateLogin($request);
        if ($this->attemptLogin($request)) {
            return view('post.posts_table',array('posts'=>$posts));
        }
        return $this->sendFailedLoginResponse($request);
    }

    public function __construct()
    {
       $this->middleware('guest:admin')->except('logout');
    }
    protected function guard()
    {
        return Auth::guard('admin');
    }
}