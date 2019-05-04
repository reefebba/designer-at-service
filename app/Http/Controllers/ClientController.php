<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\DesignRequest;
use App\Models\Design;
use App\Models\Client;
use App\Models\Lecture;

class ClientController extends Controller
{
	public function index()
	{
		return view('homepage');
	}

	public function show(Design $design)
	{
		return view('client.design.show', compact('design'));
	}

    public function checkStatus(Request $request)
    {
        $design = Design::where('uuid', $request->uuid)->first();
        if (!$design) {
            return view('client.design.error');
        }
        return redirect()->route('client.design.show', $design);
    }

	 /**
     * Store a newly created design's order in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DesignRequest $request)
    {
        $request->status = 'open';
        $design = Design::create($request->only(['status', 'size', 'base_color', 'add_info']));

        if ($request->hasFile('image')) {
            $store = $request->file('image')->store('images');
            $path = url('storage/'.$store);
            
            $design->update(['image' => $path]);
        }

        $design->client()->create($request->only(['client_name', 'client_phone']));
        $design->lecture()->create($request->only(['type', 'audience', 'title', 'tag_line', 'lecturer', 'book', 'place', 'date', 'time', 'organizer', 'contact', 'donation', 'is_meal', 'is_streaming']));

        return redirect()->route('client.design.show', $design); 
    }
}
