<?php
namespace App\Http\Controllers;

use App\Design;

class WebController extends Controller {

    public function index(Design $design)
    {
        return view('homepage', compact('design'));
    }


}
