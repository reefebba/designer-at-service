<?php

namespace App\Http\Controllers\Designer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Auth;
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
        $id = Auth::user()->id;
        $designs = Design::with('lecture:lecturer,organizer,date');

        switch ($request->status) :
            case 'in-progress':
                $designs->where([['designer_id', $id], ['status', $request->status]])->simplePaginate(10);
                break;
            case 'finished':
                $designs->where([['designer_id', $id], ['status', $request->status]])->paginate(10);
                break;
            case 'failed':
                $designs->where([['designer_id', $id], ['status', $request->status]])->paginate(10);
                break;
            default:
               $designs->where([['designer_id', $id], ['status', 'open']])->paginate(10);
               break;
        endswitch;

        return view('design.index', compact('designs'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Design  $design
     * @return \Illuminate\Http\Response
     */
    public function show(Design $design)
    {
        $design->load(['designer:id,name', 'client', 'lecture']);

        return view('design.show', compact('designs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Design  $design
     * @return \Illuminate\Http\Response
     */
    public function updateTake(Request $request, Design $design)
    {
        $this->authorize('update', $design);
        $request->status = 'in-progress';

        $design->update([
            'user_id' => Auth::user()->id,
            'status' => $request->status
        ]);
        return redirect()->route('design.show', $design);
    }

    public function updateDrop(Request $request, Design $design)
    {
        $this->authorize('update', $design);
        $request->status = 'open';

        $design->update([
            'user_id' => null,
            'status' => $request->status
        ]);
        return redirect()->route('design.show', $design);
    }

    public function updateFinish(Request $request, Design $design)
    {
        $this->authorize('update', $design);
        $request->status = 'finished';

        $design->update([
            'status' => $request->status
        ]);
        return redirect()->route('design.show', $design);
    }

    public function updateFail(Request $request, Design $design)
    {
        $this->authorize('update', $design);
        $request->status = 'failed';

        $design->update([
            'status' => $request->status
        ]);
        return redirect()->route('design.show', $design);
    }

    public function downloadImage(Design $design)
    {
        return Storage::download($design->image);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Design  $design
     * @return \Illuminate\Http\Response
     */
    public function edit(Design $design)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Design  $design
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Design $design)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Design  $design
     * @return \Illuminate\Http\Response
     */
    public function destroy(Design $design)
    {
        //
    }
}
