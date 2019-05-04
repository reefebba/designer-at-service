<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Design;

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
                $designs = Design::where('status', $request->status)->join('lectures', 'lectures.design_id', '=', 'designs.id')->orderBy('date', 'desc')->simplePaginate(5);
                break;
            case 'finished':
                $designs = Design::where('status', $request->status)->join('lectures', 'lectures.design_id', '=', 'designs.id')->orderBy('date', 'desc')->paginate(10);
                break;
            case 'failed':
                $designs = Design::where('status', $request->status)->join('lectures', 'lectures.design_id', '=', 'designs.id')->orderBy('date', 'desc')->paginate(10);
                break;
            default:
               $designs = Design::where('status', $request->status)->join('lectures', 'lectures.design_id', '=', 'designs.id')->orderBy('date', 'desc')->paginate(10);
               break;
        endswitch;

        return view('manager.design.index', compact('designs'));
    }

    public function show(Design $design)
    {
        return view('manager.design.show', compact('design'));
    }

    public function updateFail(Request $request, Design $design)
    {
        $design->update([
            'status' => 'failed'
        ]);
        return redirect()->route('manager.dashboard');
    }
}
