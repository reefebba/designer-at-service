<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Design;
use App\Models\Designer;

class DashboardController extends Controller
{
	/**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function dashboard()
    {
        $designs = [
            'total' => Design::all()->count(),
            'open' => Design::where('status', 'open')->count(),
            'inProgress' => Design::where('status', 'in-progress')->count(),
            'finished' => Design::where('status', 'finished')->count(),
            'failed' => Design::where('status', 'failed')->count()
        ];

        $designers = [
            'total' => Designer::withTrashed()->count(),
            'active' => Designer::all()->count(),
            'banned' => Designer::onlyTrashed()->count()
        ];

        return view('manager.dashboard', compact('designs', 'designers'));
    }

}
