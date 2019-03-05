<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Design;
use App\User;
use Auth;

class DesignerController extends Controller
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function edit(Design $design)
    // {
    //     return view('designs.edit', compact('design'));
    // }

    public function getUserDetails()
    {
        $id = Auth::user()->id;
        $user = User::withCount('designs')->findOrFail($id);

        return view('designer/dashboard/profile', compact('user'));
    }

    public function home()
    {
        return view("/designer/dashboard/home");
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
