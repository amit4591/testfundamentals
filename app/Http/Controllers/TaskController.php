<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TaskController extends Controller
{
    //

    public function index()
    {
        //die('aaaaaaaaaaaaaa');
        $tasks = Task::all();
        var_dump($tasks);die;
        //return view('tasks.index')->withTasks($tasks);
        return view('tasks.index',compact($tasks));
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request ){

        $this->validate($request, [
            'title' => 'required',
            'description' => 'required'
        ]);

        $input = $request->all();

        Task::create($input);

        return redirect()->back();
    }

    public function show($id)
    {
        $task = Task::findOrFail($id);

        return view('tasks.show')->withTask($task);
    }
}
