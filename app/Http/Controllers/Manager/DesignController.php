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
                $designs = Design::where('status', $request->status)->join('lectures', 'designs.id', '=', 'lectures.design_id')->orderBy('lectures.date', 'desc')->simplePaginate(8)->withPath('design?status='.$request->status);
                break;
            case 'finished':
                $designs = Design::where('status', $request->status)->join('lectures', 'designs.id', '=', 'lectures.design_id')->orderBy('lectures.date', 'desc')->paginate(8)->withPath('design?status='.$request->status);
                break;
            case 'failed':
                $designs = Design::where('status', $request->status)->join('lectures', 'designs.id', '=', 'lectures.design_id')->orderBy('lectures.date', 'desc')->paginate(8)->withPath('design?status='.$request->status);
                break;
            default:
               $designs = Design::where('status', $request->status)->join('lectures', 'designs.id', '=', 'lectures.design_id')->orderBy('lectures.date', 'desc')->paginate(8)->withPath('design?status='.$request->status);
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
