<?php

namespace App\Http\Controllers;

use App\Http\Requests\MembreFormRequest;
use App\Models\Membre;
use Illuminate\Http\Request;

class MembreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $membres = Membre::all();

        return view('membre', compact('membres'));
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
    public function store(MembreFormRequest $request)
    {

        $imageFillName = $request->image->getClientOriginalName();
        $request->image->storeAs('public/images/membre', $imageFillName);


        $project     = Membre::create([
            'name' => $request->name,
            'image' => $imageFillName,
            'email' => $request->email,
            'phone' => $request->phone
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Membre $membre)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Membre $membre)
    {
        //
    }
}
