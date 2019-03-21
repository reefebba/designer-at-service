<?php
namespace App\Http\Controllers;

class DesignController extends Controller {
    protected $user;

    public function __construct()
    {
        
    }

    public function showFinished($data)
    {
        return view("$this->user/design/finished", compact($data));
    }

    public function showInProgress($data)
    {
        return view("$this->user/design/in_progress", compact($data));
    }

    public function showOpen()
    {
        return view("$this->user/design/open", compact($data));
    }
}
?>
