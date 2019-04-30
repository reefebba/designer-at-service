<?php

namespace App\Http\Controllers;

use App\Http\Requests\DesignRequest;
use App\Models\Design;
use App\Models\Client;
use App\Models\Lecture;

class ClientController extends Controller
{
	public function index()
	{
		return view('customer/homepage'); // HomePage
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
        $design = Design::create($request->only(['status', 'size', 'base_color', 'add_info']));

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images');
            $design->update(['image' => $path]);
        }

        $client = Client::create($request->only(['client_name', 'client_phone']));
        $lecture = Lecture::create($request->only(['type', 'audience', 'title', 'tag_line', 'lecturer', 'book', 'place', 'date', 'time', 'organizer', 'contact', 'donation', 'is_meal', 'is_streaming']));

        return view('design.show'); 

        // ->route('client.design.show', $design); 
    }

}
