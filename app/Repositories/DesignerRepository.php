<?php 

namespace App\Repositories;


use Illuminate\Http\Request;
use Auth;
use App\Models\Designer;


class DesignerRepository implements Model
{
    public function countForManager()
    {
    	$designers = [
            'total' => Designer::withTrashed()->count(),
            'active' => Designer::all()->count(),
            'banned' => Designer::onlyTrashed()->count()
        ];

        return (object)$designers;
    }
}
