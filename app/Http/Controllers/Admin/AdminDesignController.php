<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Design;

class AdminDesignController extends Controller {

  protected $view_dir = "admin/design";

  public function show(Design $designs, $design)
  {
      $designs->with("designer")->findOrFail($design);

      return view("$this->view_dir/show", compact("designs"));
  }

  public function showFinished(Design $designs)
  {
      $designs->where("status", "finished")->with('user')->get();

      return view("$this->view_dir/finished", compact('designs'));
  }

  public function showInProgress(Design $designs)
  {
      $designs = $designs->where("status", "in progress")->with('user')->get();

      return view("$this->view_dir/in_progress", compact("designs"));
  }

  public function showOpen(Design $designs)
  {
      $designs->where("status", "open")->get();

      return view("$this->view_dir/index", compact("designs"));
  }
}
?>
