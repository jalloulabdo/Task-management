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
    public function store(MembreFormRequest $request)
    {

        $imageFillName = $request->image->getClientOriginalName();
        $request->image->storeAs('public/images/membre', $imageFillName);


        $project     = Membre::create([
            'name' => $request->name,
            'image' => $imageFillName,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => $request->password
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
    public function update(MembreFormRequest $request, Membre $membre)
    {    
        
        if(isset($request->image) && !empty($request->image)){
            $imageFillName = $request->image->getClientOriginalName();
            $request->image->storeAs('public/images/membre', $imageFillName);
            $membre->update([
                'image' => $imageFillName
            ]);
        }
        
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
        
        $membre->delete();
    
        return redirect()->route('membres.index')
                        ->with('success','Membre deleted successfully');
    }
}
