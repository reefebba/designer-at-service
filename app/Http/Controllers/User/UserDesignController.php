<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Design;
use App\User;
use Auth;

class UserDesignController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // where('status', 'open') or user_id, null cause of user delete by admin
        $designs = Design::with('user:id,name')->where('user_id', null)->get();

        return view('designer/design/open', compact('designs'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexProgress()
    {
        // where('status', 'open') or user_id, null cause of user delete by admin
        $designs = Design::with('user:id,name')
                    ->where(['user_id' => Auth::user()->id, 'status' => 'in progress'])
                    ->get();

        return view('designer/design/in_progress', compact('designs'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexFinished()
    {
        // where('status', 'open') or user_id, null cause of user delete by admin
        $designs = Design::with('user:id,name')
                    ->where(['user_id' => Auth::user()->id, 'status' => 'finished'])
                    ->get();

        return view('designer/design/finished', compact('designs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateTake(Request $request, Design $design)
    {
        $this->authorize('update', $design);
        $request->status = 'in progress';

        $design->update([
            'user_id' => Auth::user()->id,
            'status' => $request->status
        ]);
        return redirect('/designs/'.$design->id);
    }

    public function updateDrop(Request $request, Design $design)
    {
        $this->authorize('update', $design);
        $request->status = 'open';

        $design->update([
            'user_id' => null,
            'status' => $request->status
        ]);
        return redirect('/designs/'.$design->id);
    }

    public function updateFinish(Request $request, Design $design)
    {
        $this->authorize('update', $design);
        $request->status = 'finished';

        $design->update([
            'status' => $request->status
        ]);
        return redirect('/designs/'.$design->id);
    }
}
