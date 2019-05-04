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

	public function showActive(Designer $designer)
    {
        $designer->load('designs');

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
            $fileName = 'profile';
            $ext = $request->file('photo')->getClientOriginalExtension();
            $store = $request->file('photo')->storeAs('avatars', $fileName.$designer->id.'.'.$ext);
            $path = url('storage/'.$store);
            
            $designer->update(['photo' => $path]);
        }

        $designer->update($request->except('photo'));

        return redirect()->route('manager.designer.index', $designer);
    }
}
