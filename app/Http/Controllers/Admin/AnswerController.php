<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\AnswerModel;
use App\Model\ProblemModel;

class AnswerController extends Controller
{
    public function answer_create(){
        return view("answer.answer_create");
    }//后台问题列表
    public function answer_add(Request $request){
        $answer = new AnswerModel();
        $ans_text = request()->ans_text;
        $where = [
            "ans_del"=>1
        ];
        if($ans_text){
            $where[] = ["ans_text","like","%$ans_text%"];
        }
        $data = $answer::where($where)->paginate(2);
        return view("answer.answer_add",["data"=>$data,"ans_text"=>$ans_text]);
    }//后台问答添加
    public function answer_show(){
        $user_id = 1;
        $cur_id = 1;
        $p_id = 1;
        $answer = new AnswerModel;
        $data = request()->all();
        // dd($data);
        $res = $answer::insert($data);
        $ans = $answer->where("ans_del","=",1)->get();
        $problem =  ProblemModel::where("is_del","=",1)->get();
        if($res){
            $arr = [
                "code"=>0000,
                "msg"=>"问题添加成功",
                'url'=>"/answer/answer_add",
            ];
        }else{
            $arr = [
                "code"=>0001,
                "msg"=>"问题添加失败",
                'url'=>"/answer/answer_add"
            ];
        }
        return  json_encode($arr);
    }
    public function answer_store(){
        $problem = ProblemModel::get();
        return view("answer.answer_store",["problem"=>$problem]);
    }
    public function answer_del(){
        $ans_id = request()->ans_id;
        $answer = new AnswerModel();
        $info = AnswerModel::where("ans_id",$ans_id)->update(["ans_del"=>0]);
        if($info){
            $arr = [
                "code"=>00002,
                "message"=>"答案删除成功",
                "url"=>"/answer/answer_add"
            ];
        }else{
            $arr = [
                "code"=>00003,
                "message"=>"答案删除失败",
                "url"=>"/answer/answer_add"
            ];
        }
        return json_encode($arr);
    }//后台问答删除
    public function answer_upd($ans_id){
        $answer = new AnswerModel();
        $data = $answer::where("ans_id",$ans_id)->first();
        return view("answer.answer_upd",["data"=>$data]);
    }//后台问答修改
    public function answer_upd_do(){
        $ans_id = request()->ans_id;
        $res = request()->all();
        $answer = new AnswerModel;
        $data = $answer::where("ans_id",$ans_id)->update($res);
        if($data){
            $arr = [
                "code"=>00003,
                "msg"=>"问答修改成功",
                'url'=>"/answer/answer_add",
            ];
        }else{
            $arr = [
                "code"=>00004,
                "msg"=>"问答修改失败",
                'url'=>"/answer/answer_add",
            ];
        }
        return json_encode($arr);
    }//后台问答修改执行
}
