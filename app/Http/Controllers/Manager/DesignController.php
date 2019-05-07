<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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
                $designs = Design::where('status', $request->status)->simplePaginate(8)->withPath('design?status='.$request->status);
                break;
            case 'finished':
                $designs = Design::where('status', $request->status)->paginate(8)->withPath('design?status='.$request->status);
                break;
            case 'failed':
                $designs = Design::where('status', $request->status)->paginate(8)->withPath('design?status='.$request->status);
                break;
            default:
                $request->status = 'open';
                $designs = Design::where('status', $request->status)->paginate(8)->withPath('design?status='.$request->status);
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Design  $design
     * @return \Illuminate\Http\Response
     */
    public function destroy(Design $design)
    {
        $file = substr(strrchr($design->image, "/"), 1);
        if (isset($file)) {
            Storage::delete('images/'.$file);
        }
        $design->delete();

        return redirect()->route('manager.dashboard');
    }
}
