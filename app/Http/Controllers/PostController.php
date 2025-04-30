<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portfolio;
use App\Models\Type;
use App\Models\Technology;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $project = Portfolio::all();
        return view('project', compact('project'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $types= Type::all();
        $technologies= Technology::all();
        return view('create', compact('types', 'technologies'));
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
        $newProject->type_id =$data['type_id'];
        
        $newProject->save();
        
        $newProject->technologies()->attach($data['technologies']);


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
        $types= Type::all();
        return view('edit', compact ('project','types'));
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
        $project->type_id =   $data['type_id'];

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
