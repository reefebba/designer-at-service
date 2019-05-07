<?php

namespace App\Http\Controllers\Designer;

use App\Http\Controllers\Controller;
use App\Repositories\DesignRepository;

class DashboardController extends Controller
{
    /**
     * Show the application dashboard.
     */
    public function dashboard(DesignRepository $designs)
    {
        $designs = $designs->designerGetCounter();

        return view('designer.dashboard', compact('designs'));
    }  
}
