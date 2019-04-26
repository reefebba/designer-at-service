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
                $designs = Design::with('lecture:id,lecturer,organizer,date')->where('status', $request->status)->simplePaginate(10);
                break;
            case 'finished':
                $designs = Design::with('lecture:id,lecturer,organizer,date')->where('status', $request->status)->paginate(10);
                break;
            case 'failed':
                $designs = Design::with('lecture:id,lecturer,organizer,date')->where('status', $request->status)->paginate(10);
                break;
            default:
               $designs = Design::with('lecture:id,lecturer,organizer,date')->where('status', $request->status)->paginate(10);
               break;
        endswitch;

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
