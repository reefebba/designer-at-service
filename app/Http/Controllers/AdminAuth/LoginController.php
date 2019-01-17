<?php

namespace App\Http\Controllers\AdminAuth;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    
    protected $redirectTo = '/admin';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }

    public function showLoginForm()
    {
        return view('adminAuth.login');
    }

    protected function guard()
    {
        return Auth::guard('admin');
    }

    // protected function attemptLogin(Request $request)
    // {
    //     // $credentials = [
    //     //             'email' => $request->email,
    //     //             'password' => $request->password
    //     //         ];

    //     return $this->guard()->attempt(
    //         $this->credentials($request), $request->filled('remember')
    //     );
    // }
    
    // protected function sendLoginResponse(Request $request)
    // {
    //     $request->session()->regenerate();


    //     $this->clearLoginAttempts($request);

    //     return $this->authenticated($request, $this->guard())
    //             ?: redirect()->intended($this->redirectPath());
    // }

    // public function logout(Request $request)
    // {
    //     $this->guard()->logout();

    //     $request->session()->invalidate();

    //     return $this->loggedOut($request) ?: redirect('/');
    // }

    // public function login(Request $req) 
    // {
    //     $this->validate($req, [
    //         'email' => 'required|email',
    //         'password' => 'required|min:6'
    //     ]);

    //     $credentials = [
    //         'email' => $req->email,
    //         'password' => $req->password
    //     ];
    //     // dd($req);
    //     // dd(Auth::guard('admin'));
    //     // dd($req->member());
    //     // Attempt to log the user in 
    //     if (Auth::guard('admin')->attempt($credentials)) {
    //         // if login is successful, then redirect to their intended location
    //         return redirect()->intended(route('admin.home'));
    //     }

    //     // if login is unsuccessful, redirect back to login form with data
    //     return redirect()->back()->withInput($req->only('email', 'remember'));
    // }
}
