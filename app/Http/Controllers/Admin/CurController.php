<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\CategoryModel;
use App\Model\CurModel;

class CurController extends Controller
{
    public function course_add(){
        $res = CategoryModel::get();
        return view("course.course_add",['res'=>$res]);
    }//后台课程添加

    public function store(){
        // echo 111;
        $cate_id = request()->post("cate_id");
        $cur_name = request()->post("cur_name");
        $cur_class = request()->post("cur_class");
        $hour = request()->post("hour");
        $cur_content = request()->post("cur_content");
        $data=[
            "cate_id"=>$cate_id,
            "cur_name"=>$cur_name,
            "cur_class"=>$cur_class,
            "hour"=>$hour,
            "cur_content"=>$cur_content
        ];
        $res = CurModel::insert($data);
        // dd($res);
        if($res){
            return['code'=>'0','mag'=>"成功"];
        }else{
            return['code'=>'1','mag'=>"失败"];
        }

    }

    public function course_list(){
        $cur_name=request()->cur_name;
        $where=[];
        if($cur_name){
            $where[]=['cur_name','like',"%$cur_name%"];
        }
        $res = CurModel::where($where)->where(['cur_del'=>1])->paginate(2);
        $query=request()->all();
        return view("course.course_list",['res'=>$res,'query'=>$query]);
    }//后台课程展示
    public function del(){
       // echo 111;
        $cur_id=request()->cur_id;
        // dd($cate_id);
        $res = CurModel::where(['cur_id'=>$cur_id])->update(['cur_del'=>2]);
        // dd($res);
        if($res){
            return['code'=>'0','mag'=>"成功"];
        }else{
            return['code'=>'1','mag'=>"失败"];
        }
    }


    public function update($id){
        $res = CategoryModel::get();
        $data = CurModel::where('cur_id',$id)->first();
        return view("course.update",['res'=>$res,'data'=>$data]);
    }

    public function updatedo(){
        // echo 111;
        $cur_id = request()->post("cur_id");
        $cate_id = request()->post("cate_id");
        $cur_name = request()->post("cur_name");
        $cur_class = request()->post("cur_class");
        $hour = request()->post("hour");
        $cur_content = request()->post("cur_content");
        $data=[
            "cur_id"=>$cur_id,
            "cate_id"=>$cate_id,
            "cur_name"=>$cur_name,
            "cur_class"=>$cur_class,
            "hour"=>$hour,
            "cur_content"=>$cur_content
        ];
         $res = CurModel::where('cur_id',$cur_id)->update($data);
        // dd($res);
        if($res){
            return['code'=>'0','mag'=>"成功"];
        }else{
            return['code'=>'1','mag'=>"失败"];
        }
    }
}
