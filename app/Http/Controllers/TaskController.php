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
        $tasks = Task::all();
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
    public function update(Request $request, Task $task)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        //
    }
}
