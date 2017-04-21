<?php

namespace App\Http\Controllers\v1;

use App\Services\v1\TaskService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class TaskController extends Controller
{
    protected $tasks;
    public function __construct(TaskService $service)
    {
        $this->tasks=$service;

        //$this->middleware('auth:api');    //everything will be protected
        $this->middleware('auth:api', ['only'=> ['store','update','destroy']]); //only or except

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        /*$data=$this->tasks->getTasks();
        return response()->json($data);*/


        $data=$this->tasks->getTasks();
        //var_dump($data);
        return response()->json($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $data=$this->tasks->getTask($id);

        return response()->json($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
