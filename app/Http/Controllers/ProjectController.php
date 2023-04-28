<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectFormRequest;
use App\Models\Project;
use App\Models\Task;
use Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $idUser = auth()->user()->id;

        $projects = Project::where('id_user', $idUser)->get();

        $taskCount = array();
        $class = array();

        foreach ($projects as $key => $project) {

            $taskList = Task::where('project_id', $project->id)->get();

            $nbTask = $taskList->count();

            $taskListDone = Task::where('project_id', '<=', $project->id)->where('status', 2)->get();
            $nbTaskDone = $taskListDone->count();

            $taskCount[$key] = 0;
            $class[$key] = 'circle-progress-secondary';

            if ($nbTask > 0) {
                $prcent = ($nbTaskDone / $nbTask) * 100;
                $taskCount[$key] = $prcent;
                if ($prcent > 30 && $prcent < 50) {
                    $class[$key] = 'circle-progress-warning';
                } elseif ($prcent >= 50 && $prcent < 75) {
                    $class[$key] = 'circle-progress-primary';
                } elseif ($prcent >= 75) {
                    $class[$key] = 'circle-progress-success';
                }
            }
        }

        return view('project.project', compact('projects', 'taskCount', 'class'));
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
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'endDate' => [
                'required'
            ],
            'startDate' => 'required',

        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $idUser = auth()->user()->id;

        $project     = Project::create([
            'name' => $request->name,
            'date_start' => $request->startDate,
            'date_end' => $request->endDate,
            'description' => $request->description,
            'id_user' => $idUser
        ]);
        return redirect('projects')->with('msg', $project);
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {

        return view('project.edit', compact('project'));;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {   
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'endDate' => [
                'required'
            ],
            'startDate' => 'required',

        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $project->update([
            'name' => $request->name,
            'date_start' => $request->startDate,
            'date_end' => $request->endDate,
            'description' => $request->description,
        ]);

        return redirect()->route('projects.index')->with('success', 'Project Update Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()->route('projects.index')
            ->with('success', 'Project deleted successfully');
    }
}
