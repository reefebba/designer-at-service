<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Designer;
use Auth;

class ProfileController extends Controller
{

    public function managerProfile()
    {
        $id = Auth::user()->id;
        $designer = Designer::withCount('designs')->findOrFail($id);

        return view('manager.profile.managerProfile', compact('designer'));
    }
    public function showDesign(Designer $designer)
    {
        $designs = $designer->designs()->paginate(5);
        
        return view('manager.profile.design', compact('designs'));
    }

	public function showActive(Designer $designer)
    {
        return view('manager.profile.show', compact('designer'));
    }

    public function showBanned($id)
    {
    	$designer = Designer::onlyTrashed()->findOrFail($id);
        $designer->load('designs');

        return view('manager.profile.show', compact('designer'));
    }

    public function update(Request $request, Designer $designer)
    {
        $this->validate($request, [
            'name' => 'required|min:3',
            'email' => 'required|email|unique:designers,email,'.$designer->id,
            // 'password' => 'nullable',
            'phone' => 'required|numeric|digits_between:10,14|unique:designers,phone,'.$designer->id,
            'photo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        if ($request->hasFile('photo')) {
            $fileName = substr(strrchr($designer->photo, "/"), 1);
            if ($fileName !== 'profile.png') {
                $path = $request->file('photo')->storeAs('avatars');
            } else {
                $path = $request->file('photo')->storeAs('avatars', $fileName.$designer->id);
            }
            $designer->update(['photo' => $path]);
        }
        $designer->update($request->except('photo'));
        return redirect()->route('manager.designer.index', $designer);
    }
}
