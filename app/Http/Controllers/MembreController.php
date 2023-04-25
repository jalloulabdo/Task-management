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
      
        return view('membre');
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
        
        $imageName=null;
        $image_path = $request->file('image')->store('image', 'public');
        dd($image_path);
        
        $project     = Membre::create([
            'name' => $request->name,
            'image' =>$imageName,
            'email' =>$request->email,
            'phone' =>$request->phone
        ]);
        return back()->with('success', 'Image uploaded Successfully!');
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
