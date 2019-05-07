<?php 

namespace App\Repositories;


use Illuminate\Http\Request;
use Auth;
use App\Models\Design;


class DesignRepository //implements Model
{
    private $id;

    public function __construct()
    {
        $this->id = Auth::user()->id;
    }

    public function designerGetCounter()
    {
        $designs = [
            'open' => Design::where('status', 'open')->count(),
            'inProgress' => Design::where([['designer_id', $this->id], ['status', 'in-progress']])->count(),
            'finished' => Design::where([['designer_id', $this->id], ['status', 'finished']])->count(),
            'failed' => Design::where([['designer_id', $this->id], ['status', 'failed']])->count(),
            'total' => Design::where('designer_id', $this->id)->count(),
        ];

        return (object)$designs;
    }

    public function designerGetAllWithStatus(string $status)
    {
    	$designs = Design::where([['designer_id', $this->id], ['status', $status]])->simplePaginate(8)->withPath('design?status='.$status);
    	return $designs;
    }

    public function countForManager()
    {
    	$designs = collect([
            'total' => Design::all()->count(),
            'open' => Design::where('status', 'open')->count(),
            'inProgress' => Design::where('status', 'in-progress')->count(),
            'finished' => Design::where('status', 'finished')->count(),
            'failed' => Design::where('status', 'failed')->count()
        ]);
    }
}
