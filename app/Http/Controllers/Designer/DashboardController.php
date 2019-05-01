<?php

namespace App\Http\Controllers\Designer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\Design;

class DashboardController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function dashboard()
    {
        $id = Auth::user()->id;

        $designs = [
            'open' => Design::where('status', 'open')->count(),
            'inProgress' => Design::where([['designer_id', $id], ['status', 'in-progress']])->count(),
            'finished' => Design::where([['designer_id', $id], ['status', 'finished']])->count(),
            'failed' => Design::where([['designer_id', $id], ['status', 'failed']])->count(),
            'total' => Design::where([['designer_id', $id], ['status', 'total']])->count(),
        ];

        return view('dashboard', compact('designs'));
    }  
}
