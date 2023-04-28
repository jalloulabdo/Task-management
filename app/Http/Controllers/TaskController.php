<?php

namespace App\Http\Controllers;

use App\Http\Requests\TasksFormRequest;
use App\Models\Task;
use App\Models\Project;
use App\Models\Membre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $idUser = auth()->user()->id;

        $projects = Project::where('id_user', $idUser)->get();
        $membres = Membre::where('id_admin', $idUser)->get();
        $tasks = null;

        if (isset($projects[0]) && !empty($projects[0])) {
            
            $tasks = DB::table('tasks') 
                    ->join('membres', 'membres.id', '=', 'tasks.membre_id')
                    ->where('tasks.project_id', $projects[0]->id)
                    ->select('tasks.*','membres.image')
                    ->get();
        }
        
        return view('task.task', compact('projects', 'membres', 'tasks'));
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
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'deadline' => [
                'required'
            ], 

        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $idUser = auth()->user()->id;

        $ytask     = Task::create([
            'name' => $request->name,
            'membre_id' => $request->membre,
            'description' => $request->description,
            'deadline' => $request->deadline,
            'project_id' => $request->project_modal,
            'id_user' => $idUser
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

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'deadline' => [
                'required'
            ], 

        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        
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
    public function task(Request $request)
    {
        $tasks =  DB::table('tasks') 
        ->join('membres', 'membres.id', '=', 'tasks.membre_id')
        ->where('tasks.project_id', $request->idProject)
        ->select('tasks.*','membres.image')
        ->get();
       
        $membres = Membre::all();
        $idProject = $request->idProject;
        return view('task.loadTask', compact('tasks', 'membres', 'idProject'));
    }
}
