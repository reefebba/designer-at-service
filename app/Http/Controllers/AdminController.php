<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Design;
use App\User;
use App\Admin;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $designs = [
        'total' => Design::all()->count(),
        'open' => Design::where('status', 'open')->count(),
        'inProgress' => Design::where('status', 'in progress')->count(),
        'finished' => Design::where('status', 'finished')->count()
        ];

        return view('admin/dashboard/home', compact('designs'));
    }

    /**
     * ==============================
     *         Design Methods
     * ==============================
     */

    public function getAllOpenDesigns()
    {
        $designs = Design::where('status', 'open')->get();

        return view('designs.index', compact('designs'));
    }

    public function getAllInProgressDesigns()
    {
        $designs = Design::where('status', 'in progress')->get();

        return view('admin/design/in_progress', compact('designs'));
    }

    public function getAllFinishedDesigns()
    {
        $designs = Design::where('status', 'finished')->get();

        return view('admin/design/finished', compact('designs'));
    }

    /**
     * ===========================
     *         User Methods
     * ===========================
     */

    public function getAllActiveUsers()
    {
        $users = User::withCount('designs')->get();

        return view('users.index', compact('users'));
    }

    public function getAllTrashedUsers()
    {
        $users = User::onlyTrashed()->get();

        return view('users.index', compact('users'));
    }

    public function getUserDetails(User $user)
    {
        $user->load('designs');

        return view('users.show', compact('user'));
    }

    public function getEditUser(User $user)
    {
        return view('users.edit', compact('user'));
    }

    public function updateUser(User $user,Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:3',
            'email' => 'required|email',
            'phone' => 'required|numeric|digits_between:10,14',
            'photo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $fileName = $request->name.'_'.$user->id.'.'.$file->getClientOriginalExtension();

            $file->move('images', $fileName);
            $filePath = url('images/'.$fileName);
            $user->update(['photo' => $filePath]);
        }

        $user->update($request->except('photo'));

        return view('users.show', compact('user'));
    }

    public function deleteUser(User $user)
    {
        $user->delete();

        return redirect(route('admin.user.index'));
    }

    public function restoreUser($id)
    {
        $user = User::onlyTrashed()->findOrFail($id);
        $user->restore();

        return redirect(route('admin.user.index'));
    }

    public function destroyUser($id)
    {
        $user = User::onlyTrashed()->findOrFail($id);
        $user->forceDelete();

        return redirect(route('admin.user.trashed'));
    }

    /**
     * ===========================
     *         Admin Methods
     * ===========================
     */

    public function getAdminDetails(Admin $admin)
    {
        return view('admins.show', compact('admin'));
    }

    public function getEditAdmin(Admin $admin)
    {
        return view('admins.edit', compact('admin'));
    }

    public function updateAdmin(Admin $admin,Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:3',
            'email' => 'required|email',
            'phone' => 'required|numeric|digits_between:10,14',
            'photo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $fileName = $request->name.'_'.$admin->id.'.'.$file->getClientOriginalExtension();

            $file->move('images', $fileName);
            $filePath = url('images/'.$fileName);
            $admin->update(['photo' => $filePath]);
        }

        $admin->update($request->except('photo'));

        return view('admins.show', compact('admin'));
    }
}
