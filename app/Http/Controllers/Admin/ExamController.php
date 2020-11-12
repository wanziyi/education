<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\PaperModel;
use App\Model\ExamModel;

class ExamController extends Controller
{
    public function exam_add(){
        $paper = new PaperModel;
        $data = $paper->get();
        $exam_name = request()->exam_name;
        $where = [
            "exam_del"=>1
        ];
        if($exam_name){
            $where[] = ["exam_name","like","%$exam_name%"];
        }
        $res = ExamModel::leftjoin("paper","paper.paper_id","=","exam.paper_id")->where($where)->paginate(2);
        return view("exam.exam_add",["res"=>$res,"data"=>$data,"exam_name"=>$exam_name]);
    }//后台考试添加
    public function paper_show(){
        $exam = new ExamModel;
        $res = request()->all();
        $where = [
            "exam_del"=>1
        ];
        $data = $exam::where($where)->get();
        return view("exam.paper_show",["data"=>$data]);
    }//后台考卷展示
    public function add(){
        $exam = new ExamModel;
        $data = request()->all();
        $data["user_id"] = 1;
        $data["question_id"] = 1;
        $data["add_time"] = time();
        $data["past_time"] = time()+10;
        $res = $exam->insert($data);
        if($res){
            $arr = [
                "code"=>0000,
                "message"=>"考卷添加成功",
                "url"=>"/exam/exam_add"
            ];
        }else{
            $arr = [
                "code"=>0001,
                "message"=>"考卷添加失败",
                "url"=>"/exam/exam_add"
            ];
        }
        return json_encode($arr);
    }
    public function exam_upd($exam_id){
        $exam = ExamModel::get();
        $paper = PaperModel::get();
        $data = ExamModel::leftjoin("paper","paper.paper_id","=","exam.paper_id")->where("exam_id",$exam_id)->first();
        return view("exam.exam_upd",["data"=>$data,"exam"=>$exam,"paper"=>$paper]);
    }
    public function exam_upd_do(){
        $exam_id = request()->exam_id;
        // dd($exam_id);
        $exam = new ExamModel();
        $res = request()->all();
        $res["add_time"] = time();
        $res["past_time"] = time()+10;
        // dd($res);
        $paper = new PaperModel();
        // $paper_name = request()->paper_name;
        $data = $exam::where("exam_id",$exam_id)->update($res);
        if($data){
            $arr=[
                "code"=>000004,
                "message"=>"修改成功",
                "url"=>"/exam/exam_add"
            ];
        }else{
            $arr=[
                "code"=>000005,
                "message"=>"修改失败",
                "url"=>"/exam/exam_add"
            ];
        }
        return json_encode($arr,JSON_UNESCAPED_UNICODE);
    }
    public function exam_del(){
        $exam_id = request()->exam_id;
        $exam = new ExamModel();
        $info = ExamModel::where("exam_id",$exam_id)->update(["exam_del"=>0]);
        if($info){
            $arr = [
                "code"=>00002,
                "message"=>"考试删除成功",
                "url"=>"/answer/answer_add"
            ];
        }else{
            $arr = [
                "code"=>00003,
                "message"=>"考试删除失败",
                "url"=>"/answer/answer_add"
            ];
        }
        return json_encode($arr);
    }
}
