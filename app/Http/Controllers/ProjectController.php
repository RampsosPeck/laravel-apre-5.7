<?php

namespace Laravelapre\Http\Controllers;

use Illuminate\Http\Request;
use Laravelapre\Http\Requests\SaveProjectRequest;
use Laravelapre\Project;

class ProjectController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth')->only('create','edit','store','update');
        $this->middleware('auth')->except('index','show');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::latest()->paginate(3);
        return view('projects.index',compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projects.create',[
            'project' => new Project
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaveProjectRequest $request)
    {
        /*Project::create([
            'title' => request('title'),
            'url' => request('url'),
            'description' => request('description')
        ]);*/
      /*  $fields= request()->validate([
            'title' => 'required',
            'url' => 'required',
            'description' => 'required'
        ]);*/

        Project::create($request->all());
        //dd('holaaa');
        return redirect()->route('projects.index')->with('status','El proyecto fue creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        return view('projects.show',[
            'project' => $project
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        return view('projects.edit',[
            'project' => $project
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Project $project,SaveProjectRequest $request)
    {
        $project->update($request->validated());

        return redirect()->route('projects.show', $project)->with('status','El proyecto fue actualizado.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('projects.index')->with('status','El proyecto fue eliminado');
    }
}
