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

        switch ($request->status) :
            case 'in-progress':
                $designs = Design::where([['designer_id', $id], ['status', $request->status]])->simplePaginate(8)->withPath('design?status='.$request->status);
                break;
            case 'finished':
                $designs = Design::where([['designer_id', $id], ['status', $request->status]])->paginate(8)->withPath('design?status='.$request->status);
                break;
            case 'failed':
                $designs = Design::where([['designer_id', $id], ['status', $request->status]])->paginate(8)->withPath('design?status='.$request->status);
                break;
            default:
                $request->status = 'open';
                $designs = Design::where('status', $request->status)->paginate(8)->withPath('design?status='.$request->status);
                break;
        endswitch;

        return view('designer.design.index', compact('designs'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Design  $design
     * @return \Illuminate\Http\Response
     */
    public function show(Design $design)
    {
        return view('designer.design.show', compact('design'));
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
            'designer_id' => Auth::user()->id,
            'status' => $request->status
        ]);
        return redirect()->route('dashboard');
    }

    public function updateDrop(Request $request, Design $design)
    {
        $this->authorize('update', $design);
        $request->status = 'open';

        $design->update([
            'designer_id' => null,
            'status' => $request->status
        ]);
        return redirect()->route('dashboard');
    }

    public function updateFinish(Request $request, Design $design)
    {
        $this->authorize('update', $design);
        $request->status = 'finished';

        $design->update([
            'status' => $request->status
        ]);
        return redirect()->route('dashboard');
    }

    public function updateFail(Request $request, Design $design)
    {
        $this->authorize('update', $design);
        $request->status = 'failed';

        $design->update([
            'status' => $request->status
        ]);
        return redirect()->route('dashboard');
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
