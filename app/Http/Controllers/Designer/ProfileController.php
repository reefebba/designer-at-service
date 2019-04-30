<?php

namespace App\Http\Controllers\Designer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\Designer;

class ProfileController extends Controller
{
	public function show()
    {
        $id = Auth::user()->id;
        $designer = Designer::withCount('designs')->findOrFail($id);

        return view('profile.show', compact('designer'));
    }

    public function edit()
    {
        $designer = Auth::user();

        return view('profile.edit', compact('designer'));
    }

    public function update(Request $request)
    {
        $designer = Auth::user();

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
