<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     *
     */
    public function index()
    {
        $teams = Team::all();

        return view('team.index', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('team.create');
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

        Team::create($input);
        
        return redirect('/admin/teams')->with('message','Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Team $teams)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Team $team)
    {
        return view('team.edit', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Team $team)
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

        $team->update($input);
        return redirect('/admin/teams')->with('message','Data Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Team $team)
    {
        $team->delete();
        return redirect('/admin/teams')->with('message','Data Berhasil Dihapus');
    }
}
