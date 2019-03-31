<?php

namespace App\Http\Controllers;

use App\Http\Requests\DesignRequest;
use App\Models\Design;

class ClientController extends Controller
{
	public function index()
	{
		return view('welcome'); // HomePage
	}

	public function show(Design $design)
	{
		return redirect()->route('design.show', $design); // StatusDesignPage
	}

	 /**
     * Store a newly created design's order in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DesignRequest $request)
    {
        $design = Design::create($request->except('image'));

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images');
            $design->update(['image' => $path]);
        }

        return redirect()->route('design.show', $design); // ->route('client.design.show', $design); 
    }

}
