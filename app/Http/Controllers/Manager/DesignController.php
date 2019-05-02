<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Design;
use App\Models\Designer;

class DesignController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        switch ($request->status) :
            case 'in-progress':
                $designs = Design::where('status', $request->status)->simplePaginate(10);
                break;
            case 'finished':
                $designs = Design::where('status', $request->status)->paginate(10);
                break;
            case 'failed':
                $designs = Design::where('status', $request->status)->paginate(10);
                break;
            default:
               $designs = Design::where('status', $request->status)->paginate(10);
               break;
        endswitch;

        return view('manager.design.index', compact('designs'));
    }

    public function updateFail(Request $request, Design $design)
    {
        $design->update([
            'status' => 'failed'
        ]);
        return redirect()->route('design.show', $design);
    }

    public function add()
    {
        return view('manager.designer.add');
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:3',
            'password' => 'required|min:5',
            'email' => 'required|email|unique:designers',
            'phone' => 'required|numeric|digits_between:10,14|unique:designers'
        ]);

        Designer::create($request->all());
        return redirect()->route('manager.designer.index');
    }
}
