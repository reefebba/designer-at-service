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
        $users->onlyTrashed()->all()->toArray();

        return view("$view_dir/banned", compact("users"));
    }

    /**
     * Show page contain form to register new Designer/User
     *
     *
     */
    public function create()
    {
        // $user->create

        return view("admin/user/create");
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
    public function edit($user)
    {
        return view("admin/user/edit");
    }

    /**
     * Receive data from form to be stored
     *
     *
     */
    public function store(Request $request, User $user)
    {
        $user->createOrNew();
    }

    /**
     *
     *
     *
     */
    public function update(Request $request, User $user)
    {
        $user->createOrNew();
    }

    /**
     *
     *
     *
     */
    public function delete(Request $request, User $user)
    {
        $user->createOrNew();
    }

    /**
     *
     *
     *
     */
    public function destroy(Request $request, User $user)
    {
        $user->createOrNew();
    }


}
?>
