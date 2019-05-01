<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Designer;

class ProfileController extends Controller
{
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

    public function edit(Designer $designer)
    {
        return view('manager.profile.edit', compact('designer')); //to be removed. unused
    }

    public function update(Request $request, Designer $designer)
    {
        $this->validate($request, [
            'name' => 'required|min:3',
            'email' => 'required|email',
            'phone' => 'required|numeric|digits_between:10,14',
            'photo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        if ($request->hasFile('photo')) {
            $fileName = substr(strrchr($designer->photo, "/"), 1);
            if (empty($designer->photo) || $fileName !== 'profile.png') {
                $path = $request->file('photo')->store('avatars');
            } else {
                $path = $request->file('photo')->storeAs('avatars', $fileName);
            }
            $designer->update(['photo' => $path]);
        }

        $designer->update($request->except('photo'));

        return redirect()->route('profile.show');
    }
}
