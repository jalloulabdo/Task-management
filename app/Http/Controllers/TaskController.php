<?php

namespace App\Http\Controllers;

use App\Http\Requests\TasksFormRequest;
use App\Models\Task;
use App\Models\Project;
use App\Models\Membre;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();
        $membres = Membre::all();
        $tasks=null;

        if(isset($projects[0]) && !empty($projects[0])){
            $tasks=Task::where('project_id',$projects[0]->id)->get();
        }
       
        return view('task', compact('projects', 'membres', 'tasks'));
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
    public function store(TasksFormRequest $request)
    {
        $ytask     = Task::create([
            'name' => $request->name,
            'membre_id' => $request->membre,
            'description' => $request->description,
            'deadline' => $request->deadline,
            'project_id' => $request->project_modal,
        ]);
        return back()->with('success', 'Task Add Successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TasksFormRequest $request, Task $task)
    {   

        $task->update([
            'name' => $request->name,
            'membre_id' => $request->membre,
            'description' => $request->description,
            'deadline' => $request->deadline,
            'project_id' => $request->project_modal,
        ]);
        
        return back()->with('success', 'Task Update Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        //
    }

    /**
     * Show view of task .
     */
    public function task(Request $request){
        $tasks=Task::where('project_id',$request->idProject)->get();
        $membres = Membre::all();
        $idProject = $request->idProject;
        return view('task.loadTask',compact('tasks', 'membres', 'idProject'));
    }
}
