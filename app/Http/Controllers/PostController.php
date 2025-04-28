<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portfolio;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $element = Portfolio::all();
        return view('project', compact('element'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data =$request->all();

        $newProject = new Portfolio();

        $newProject->title=$data['title'];
        $newProject->description=$data['description'];
        $newProject->image=$data['image'];

        $newProject->save();

        return redirect()->route('project.show', [$newProject]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Portfolio $project)
    {
      return view('post', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Portfolio $project)
    {
        return view('edit', compact ('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Portfolio $project)
    {
        $data = $request->all();
        $project->title =   $data['title'];
        $project->description =   $data['description'];
        $project->image =   $data['image'];

        $project->update();
        return redirect()->route('project.show', $project);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Portfolio $project)
    {
       $project->delete();
       return redirect()->route('project.index');
    }
}
