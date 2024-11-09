<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     *
     */
    public function index()
    {
        $clients = Client::all();

        return view('client.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('client.create');
    }

    /**
     * Store a newly created resource in storage.
     * masuk ke method ini untuk create
     * coba masukan ke database
     */
    public function store(Request $request)
    {
        // validasi
        $request->validate([
            'title'=> 'required',
            'description'=> 'required',
            'image'=> 'required|image',
        ]);

        $input = $request->all();

        if($image =$request->file('image')){
            $destinationPath = 'image/';
            $imageName = $image -> getClientOriginalName();
            $image->move($destinationPath, $imageName);
            $input['image'] = $imageName;
        }

        Client::create($input);
        
        return redirect('/admin/clients')->with('message','Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client)
    {
        return view('client.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Client $client)
    {
        // validasi
        $request->validate([
            'title'=> 'required',
            'description'=> 'required',
            'image'=> 'image',
        ]);

        $input = $request->all();

        if($image =$request->file('image')){
            $destinationPath = 'image/';
            $imageName = $image -> getClientOriginalName();
            $image->move($destinationPath, $imageName);
            $input['image'] = $imageName;
        } else{
            unset($input['image']);
        }

        $client->update($input);
        return redirect('/admin/clients')->with('message','Data Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {
        $client->delete();
        return redirect('/admin/clients')->with('message','Data Berhasil Dihapus');
    }
}
