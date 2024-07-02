<?php

namespace App\Http\Controllers;

use App\Models\Header;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $header = Header::latest()->first();
        // dd($header);
        return view('admin.header.logo', compact('header'));
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
        $request->validate([
            'title' => 'required',
            'secondary_title' => 'required',
        ]);

        // Initialize variables
        $path = 'assets/fontend/img/';
        $defaultImage = 'logo.svg';
        $filename = $defaultImage;

        // Check if a photo is provided in the request
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $imagename = $file->getClientOriginalName();
            $filename = time() . $imagename;
            $path = 'assets/fontend/img/';
            Storage::disk('public')->put($path . $filename, file_get_contents($file));
        }
        $title = $request->title;
        $secondary_title = $request->secondary_title;
        $photo = $path . $filename;

        Header::create(['logo' => $photo, 'title' => $title, 'secondary_title' => $secondary_title]);
        return redirect()->route('header.index')->with('success', 'Header update successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Header $header)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Header $header)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Header $header)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Header $header)
    {
        //
    }

    //////
    
}
