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

        // var_dump($designs->where('designs.status', $request->status)->paginate(1));

        return view('design.index', compact('designs'));
    }

    public function updateFail(Request $request, Design $design)
    {
        $design->update([
            'status' => 'failed'
        ]);
        return redirect()->route('design.show', $design);
    }

    // public function detailOrder(Request $request, $id)
    // {
    //     switch ($request->status) :
    //         case 'in-progress':
    //             $lecture = Design::with('lecture')->where('status', $request->status)->find($id);
    //             break;
    //         case 'finished':
    //             $lecture = Design::with('lecture')->where('status', $request->status)->paginate(10);
    //             break;
    //         case 'failed':
    //             $lecture = Design::with('lecture')->where('status', $request->status)->paginate(10);
    //             break;
    //         default:
    //            $lecture = Design::with('lecture')->where('status', $request->status)->paginate(10);
    //            break;
    //     endswitch;

    //     return view('design.index', compact('lecture'));
    // }
}
