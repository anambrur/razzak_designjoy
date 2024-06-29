<?php

namespace App\Http\Controllers;

use App\Models\ProjectPhoto;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

class ProjectPhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projectPhotos = ProjectPhoto::latest()->take(6)->get();
        return view('admin.project_photo.index',compact('projectPhotos'));
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
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240',
        ]);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalName();
            $image->storeAs('public/images', $imageName);

           
            ProjectPhoto::create([
                'image' => $imageName,
            ]);
        }

        return redirect()->route('project_photo.index')->with('success', 'Project Photo Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(ProjectPhoto $projectPhoto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProjectPhoto $projectPhoto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProjectPhoto $projectPhoto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProjectPhoto $projectPhoto)
    {
        //
    }
}
