<?php

namespace App\Services\v1;

use App\Task;

class TaskService {

    public function getTasks() {

        //return Task::all();
        return $this->filterTasks(Task::all());

    }

    public function getTask($id) {
        return $this->filterTasks(Task::where('id',$id)->get());

    }


    protected function filterTasks($tasks){
        $data=[];

        foreach($tasks as $task)
        {
            $entry= [
                'title' => $task->title,
                'description' => $task->description,
                'href' => route('tasks.show', ['id'=> $task->id])
            ];
            $data[]=$entry;
        }

        return $data;
    }
}