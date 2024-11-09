<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contact = Contact::first();

        return view('contact', compact('contact'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $contact = Contact::find($id);
        // validasi
        $request->validate([
            'name'=> 'required',
            'description'=> 'required',
            'alamat'=> 'required',
            'email'=> 'required',
            'telepon'=> 'required',
            'maps_embed'=> 'required',
            'logo'=> 'image',
        ]);

        $input = $request->all();

        if($image =$request->file('logo')){
            $destinationPath = 'image/';
            $imageName = $image -> getClientOriginalName();
            $image->move($destinationPath, $imageName);
            $input['logo'] = $imageName;
        } else{
            unset($input['logo']);
        }

        $contact->update($input);

        return redirect('/admin/contact')->with('message','Data Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
