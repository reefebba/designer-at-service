<?php
namespace App\Http\Controllers\Admin;

use App\Design;

class AdminDesignController extends Controller {

  public function showFinished(Design $designs)
  {
    $designs->all();
    return view("admin/design/finished", compact('designs'));
  }
}
?>
