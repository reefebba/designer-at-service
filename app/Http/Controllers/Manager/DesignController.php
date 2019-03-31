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
        $designs = Design::with('lecture:lecturer,organizer,date');

        switch ($request->status) :
            case 'in-progress':
                $designs->where('status', $request->status)->simplePaginate(10);
                break;
            case 'finished':
                $designs->where('status', $request->status)->paginate(10);
                break;
            case 'failed':
                $designs->where('status', $request->status)->paginate(10);
                break;
            default:
               $designs->where('status', 'open')->paginate(10);
               break;
        endswitch;

        // if (empty($request->status) || $request->status !== 'in-progress' || $request->status !== 'finished') {
        //     $designs->where('status', 'open')->paginate(10);
        // }

        // if ($request->status === 'in-progress') {
        //     $designs->where('status', $request->status)->simplePaginate(10);
        // }

        // if ($request->status === 'finished') {
        //     $designs->where('status', $request->status)->paginate(10);
        // }

        return view('design.index', compact('designs'));
    }

    public function updateFail(Request $request, Design $design)
    {
        $design->update([
            'status' => 'failed'
        ]);
        return redirect()->route('design.show', $design);
    }
}
