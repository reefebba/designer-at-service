<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\DesignRequest;
use App\Design;

class ClientController extends Controller
{
	public function __construct()
    {
        $this->middleware('guest')->except('show');
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
        $design = Design::create($request->except('image'));

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = $request->organizer.'_'.time().'.'.$file->getClientOriginalExtension();

            $file->move('images', $fileName);
            $filePath = url('images/'.$fileName);
            $design->update(['image' => $filePath]);
        }      

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

}
