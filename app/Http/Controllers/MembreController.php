<?php

namespace App\Http\Controllers;

use App\Http\Requests\MembreFormRequest;
use App\Models\Membre;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class MembreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $idUser = auth()->user()->id;

        $membres = Membre::where('id_admin', $idUser)->get();

        return view('membre.membre', compact('membres'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => [
                'required', 'email', 'max:255'
            ],
            'image' => 'max:255',

        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        if (isset($request->image) && !empty($request->image)) {
            $imageFillName = $request->image->getClientOriginalName();
            $request->image->storeAs('public/images/membre', $imageFillName);
        } else {
            $imageFillName = 'user-1.jpg';
        }


        $user     = User::create([
            'name' => $request->name,
            'image' => $imageFillName,
            'email' => $request->email,
            'phone' => $request->phone,
            'type'  => 0,
            'password' => Hash::make($request->password),
        ]);

        $idUser = auth()->user()->id;

        $membre     = Membre::create([
            'name' => $request->name,
            'image' => $imageFillName,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => $request->password,
            'id_admin' => $idUser,
            'id_user' => $user->id
        ]);

        return back()->with('success', 'Membre Add Successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Membre $membre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Membre $membre)
    {
        return view('membre.edit', compact('membre'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Membre $membre)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => [
                'required', 'email', 'max:255'
            ],
            'image' => 'max:255',

        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = User::where('id', $membre->id_user)->first();


        if (isset($request->image) && !empty($request->image)) {

            $imageFillName = $request->image->getClientOriginalName();
            $request->image->storeAs('public/images/membre', $imageFillName);
            $user->update([
                'image' => $imageFillName
            ]);
            $membre->update([
                'image' => $imageFillName
            ]);
        }

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
        ]);

        $membre->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => $request->password,
        ]);

        return redirect()->route('membres.index')->with('success', 'Project Update Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Membre $membre)
    {
        $user = User::where('id', $membre->id_user)->first();

        $user->delete();
        $membre->delete();

        return redirect()->route('membres.index')
            ->with('success', 'Membre deleted successfully');
    }
}
