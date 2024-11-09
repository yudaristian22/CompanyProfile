<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::all();

        return view('service.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('service.create');
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

        Service::create($input);
        return redirect('/admin/services')->with('message','Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        return view('service.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $service)
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

        $service->update($input);
        return redirect('/admin/services')->with('message','Data Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        $service->delete();
        return redirect('/admin/services')->with('message','Data Berhasil Dihapus');
    }
}
