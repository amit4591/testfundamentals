<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\User;
use Illuminate\Support\Facades\Auth;
use Session;
use Illuminate\Support\Facades\Redirect;

class TaskController extends Controller
{
    //

    public function index()
    {
        //die('aaaaaaaaaaaaaa');
        $tasks = Task::all();
       // var_dump($tasks);die;
        return view('tasks.index')->withTasks($tasks);
       // return view('tasks.index',compact($tasks));
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

        Session::flash('flash_message', 'Task successfully added!');

        return redirect()->back();
    }

    public function show($id)
    {
        $task = Task::findOrFail($id);

        return view('tasks.show')->withTask($task);
    }
    public function edit($id)
    {

        $task = Task::findOrFail($id);
        //die($task);
        return view('tasks.edit')->withTask($task);
    }

    public function update($id, Request $request)
    {
        //die($id);
        $task = Task::findOrFail($id);

        $this->validate($request, [
            'title' => 'required',
            'description' => 'required'
        ]);

        $input = $request->all();

        $task->fill($input)->save();

        Session::flash('flash_message', 'Task successfully added!');

        return redirect()->back();
    }

    public function destroy($id, Request $request)
    {
        //die($id);
       // $role = new Role();
        //var_dump($role);die;

        $userId = Auth::id();
        $user = User::findOrFail($userId);
        //var_dump($userId);die;
        //var_dump($user->hasRole('admin'));die;
        if ( $user->hasRole('admin'))
        {
            //var_dump($user->isEmployee()); die();
            $task = Task::findOrFail($id);
            //$user = User::findOrFail($user);
            $task->delete();

            Session::flash('flash_message', 'Task successfully deleted!');
            //die($id);
            return redirect()->action(
                'TaskController@index'
            );
            //return redirect()->route('alltasks');
        }
        else{
            die('Not admin privillage');
        }

    }

}
