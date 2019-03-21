<?php
namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\User;
use Auth;

class UserController extends Controller
{
    protected $view_dir = "user/design";

    public function home()
    {
        $user = User::with('designs')->find(Auth::user()->id);
        return view('designer.dashboard.home', compact('user'));
    }
}
