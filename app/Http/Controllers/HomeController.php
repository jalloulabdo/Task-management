<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Task;
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
        $projects = Project::all();
        $tasks = null;

        if (isset($projects[0]) && !empty($projects[0])) {
            $tasks = Task::where('project_id', $projects[0]->id)->get();
        }

        return view('home', compact('projects', 'tasks'));
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
}
