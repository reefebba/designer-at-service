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
        $design = Design::where('code', $request->code)->first();
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

        $ltr = chr(rand(65, 90));
        $ltr2 = chr(rand(65, 90));
        $ltr3 = chr(rand(65, 90));
        $ltr4 = chr(rand(65, 90));
        $id = $design->id + rand(0,10);
        
        $code = $ltr .rand(0,999). $id . $ltr2.$ltr3.$ltr4;
        $design->update(['code'=>$code]);

        $design->client()->create($request->only(['client_name', 'client_phone']));
        $design->lecture()->create($request->only(['type', 'audience', 'title', 'tag_line', 'lecturer', 'book', 'place', 'date', 'time', 'organizer', 'contact', 'donation', 'is_meal', 'is_streaming']));

        return redirect()->route('client.design.show', $design); 
    }
}
