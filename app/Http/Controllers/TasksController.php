<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index(){
        $cTasks = Task::latest()->completed()->get();
        $uTasks = Task::latest()->unCompleted()->get();
        return view('tasks.index',['cTasks'=>$cTasks,'uTasks'=>$uTasks]);
    }

    public function show($id){
        $task = Task::findorFail($id);
        return view('tasks/show',['task'=>$task]);

    }
}
