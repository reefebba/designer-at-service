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

        return view('designer.profile.show', compact('designer'));
    }

    public function update(Request $request)
    {
        $designer = Auth::user();

        $this->validate($request, [
            'name' => 'required|min:3',
            'email' => 'required|email|unique:designers,email,'.$designer->id,
            'phone' => 'required|numeric|digits_between:10,14|unique:designers,phone,'.$designer->id,
            'photo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('photo')) {
            $fileName = 'profile';
            $ext = $request->file('photo')->getClientOriginalExtension();
            $store = $request->file('photo')->storeAs('avatars', $fileName.$designer->id.'.'.$ext);
            $path = url('storage/'.$store);
            
            $designer->update(['photo' => $path]);
        }

        $designer->update($request->except('photo'));

        return redirect()->route('dashboard');
    }
}
