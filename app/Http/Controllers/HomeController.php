<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Task;
use App\Models\User;
use Illuminate\Support\Facades\Response;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $tasks = null;

        $idUser = auth()->user()->id;

        $projects = Project::where('id_user', $idUser)->get();
        $nbProject = count($projects);

        $tasks = Task::where('id_user', $idUser)->get();
        $nbTasks = count($tasks);

        $tasksDo = Task::where('id_user', $idUser)->where('status', 2)->get();
        $nbTasksDo = count($tasksDo);

        if (isset($projects[0]) && !empty($projects[0])) {
            $tasks = Task::where('project_id', $projects[0]->id)->get();
        }

        return view('home', compact('projects', 'tasks', 'nbProject', 'nbTasks', 'nbTasksDo'));
    }


    public function changeStatus(Request $request)
    {
        $pieces = explode("-", $request->id);
        $idTask = $pieces[1];
        $statu = 0;

        if ($request->target == 'doing') {
            $statu = 1;
        } elseif ($request->target == 'done') {
            $statu = 2;
        }


        Task::where('id', $idTask)->update([
            'status' => $statu,
        ]);

        return Response::json(array(
            'success' => true,
        ));
    }


    public function loadTask(Request $request)
    {

        $tasks = Task::where('project_id', $request->idProject)->get();
        $idProject = $request->idProject;
        return view('home.loadTask', compact('tasks',  'idProject'));
    }

    public function editProfile()
    {
        $user = auth()->user();

        return view('home.profile', compact('user'));
    }

    public function profileEdit(Request $request)
    {

        $user = auth()->user();

        if (isset($request->image) && !empty($request->image)) {
            $imageFillName = $request->image->getClientOriginalName();
            $request->image->storeAs('public/images/membre', $imageFillName);
            $user->update([
                'image' => $imageFillName
            ]);
        }

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'gender' => $request->gender,
            'date_birth' => $request->date_birth,
        ]);

        return back()->with('success', 'Profile Update Successfully!');
    }
}
