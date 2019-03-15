<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use App\Admin;

class AdminUserController extends Controller {

    private $view_dir = "admin/user";

    /**
     *
     *
     *
     */
    // public function __construct()
    // {
    //     $this->middleware("auth:admin");
    // }

    /**
     * Show page contain list of user for admin
     *
     * @return \Illuminate\Contracts\Support\Renderable
     *
     */
    public function index(User $users)
    {
        $users->withCount("designs")->get()->toArray();

        return view("$this->view_dir/index", compact("users"));
    }

    /**
     * Show page containing list of banned User
     *
     *
     */
    public function banned(User $users)
    {
        $users->onlyTrashed()->get()->toArray();

        return view("$this->view_dir/banned", compact("users"));
    }

    /**
     * Show page contain form to register new Designer/User
     *
     *
     */
    public function create()
    {
        return view("$this->view_dir/create");
    }

    /**
     * Show page contain detail profile about one Designer
     *
     *
     */
    public function show(User $users, $user)
    {
        $users->find($user);

        return view("$this->view_dir/show", compact("users"));
    }

    /**
     * Show form to edit Designer's data
     *
     *
     */
    public function edit(User $users, $user)
    {
        $users->withTrashed()->findOrFail($user);

        return view("$this->view_dir/edit", compact($users));
    }

    /**
     * Receive data from form to be stored
     *
     *
     */
    public function store(Request $request, User $user)
    {
        $users->create($request->toArray());

        return $this->returnResponse($users);
    }

    /**
     *
     *
     *
     */
    public function update(Request $request, User $users, $user)
    {
        $users->find($user)->updateOrCreate($request->toArray());

        return $this->returnResponse($users);
    }

    /**
     *
     *
     *
     */
    public function delete(User $users, $user)
    {
        $users->find($user)->delete();

        return $this->returnResponse($users);
    }

    /**
     *
     *
     *
     */
    public function destroy(Request $request, User $user)
    {
        $users->withTrashed()->find($user);

        if ($users) {
            $users->forceDelete();
        }

        return $this->returnResponse($users);
    }

    public function returnResponse($state)
    {
        if ($state) {
            return response(null, 201);
        } else {
            return response(null, 205);
        }
    }


}
?>
