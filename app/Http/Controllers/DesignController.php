<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\DesignRequest;
use App\Design;
use Auth;

class DesignController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['create', 'store', 'show']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $designs = Design::all()->where('status', 'open');

        return view('designs.index', compact('designs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('designs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DesignRequest $request)
    {
        $design = Design::create($request->all());

        return redirect('/designs/'.$design->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Design $design)
    {                
        return view('designs.show', compact('design'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Design $design)
    {
        return view('designs.edit', compact('design'));
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
        // $dataset = [
        //     'user_id' => Auth::user()->id,
        //     'status' => $request->status
        // ];
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
