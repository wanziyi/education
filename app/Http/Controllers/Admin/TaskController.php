<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\TaskModel;

class TaskController extends Controller
{
    public function task_add(){
        $task = new TaskModel();
        $data = $task::where('task_del','=',1)->get();
        return view("task.task_add",["data"=>$data]);
    }//后台用户作业添加
    public function task_list(){
        return view("task.task_list");
    }//后台用户作业展示
    public function task_upd(){
        return view("task.task_upd");
    }//后台用户作业修改
}
