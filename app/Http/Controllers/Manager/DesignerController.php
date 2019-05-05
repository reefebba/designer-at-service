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
        if (empty($request->state) || $request->state !== 'total' || $request->state !== 'banned') {
            $designers = Designer::withCount('designs')->paginate(8)->withPath('designer?state='.$request->state);
        }

        if ($request->state == 'total') {
            $designers = Designer::withCount('designs')->withTrashed()->paginate(8)->withPath('designer?state='.$request->state);
        }

        if ($request->state === 'banned') {
            $designers = Designer::withCount('designs')->onlyTrashed()->simplePaginate(8)->withPath('designer?state='.$request->state);
        }

        return view('manager.designer.index', compact('designers'));
    }

    public function add()
    {
        return view('manager.designer.add');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:3',
            'password' => 'required|min:5',
            'email' => 'required|email|unique:designers',
            'phone' => 'required|numeric|digits_between:10,14|unique:designers'
        ]);

        Designer::create($request->all());
        return redirect()->route('manager.designer.index');
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
