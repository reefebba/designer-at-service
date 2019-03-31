<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Design;
use App\Models\Designer;

class DesignerController extends Controller
{
    

    public function index(Request $request)
    {
        $designers = Designer::withCount('designs');

        if (empty($request->state) || $request->state !== 'total' || $request->state !== 'banned') {
            $designers->paginate(10);
        }

        if ($request->state === 'total') {
            $designers->withTrashed()->paginate(10);
        }

        if ($request->state === 'banned') {
            $designers->onlyTrashed()->simplePaginate(10);
        }

        return view('manager.designer.index', compact('designers'));
    }

    public function promoteAsManager(Designer $designer)
    {
        $designer->can = 'manage';
        $designer->save();
        
        return redirect()->route('manager.designer.index');
    }
    
    public function ban(Designer $designer)
    {
        $designer->delete();

        return redirect()->route('manager.designer.index');
    } 

    public function restore($id)
    {
        $designer = Designer::onlyTrashed()->findOrFail($id);
        $designer->restore();

        return redirect()->route('manager.designer.index');
    }

    public function destroy($id)
    {
        $designer = Designer::onlyTrashed()->findOrFail($id);
        $designer->forceDelete();

        return redirect()->route('manager.designer.index');
    }
}
