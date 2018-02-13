<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
   

    use AuthenticatesUsers;

    
   public function showLoginForm()
    {
        return view('admin.login');
    }

 public function login(Request $request)
    {
        $this->validateLogin($request);

     

        if ($this->attemptLogin($request)) {
            return $this->sendLoginResponse($request);
        }

        return $this->sendFailedLoginResponse($request);
    }



    protected $redirectTo = 'index';

   
    public function __construct()
    {
       $this->middleware('guest:admin')->except('logout');
    }


  protected function guard()
    {
        return Auth::guard('admin');
    }

 public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        return redirect('/admin-login');
    }

}
