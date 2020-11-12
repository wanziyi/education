<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Model\Notice;
use App\Http\Model\Personal;
use App\Http\Model\Question;
class AdminController extends Controller
{
    public function login(){
        return view("admin.login");
    }//后台登录
    public function index(){
        return view("admin.index");
    }//后台首页
    public function course_add(){
        return view("course.course_add");
    }//后台课程添加
    public function course_list(){
        return view("course.course_list");
    }//后台课程展示
    public function course_del(){
        return view("course.course_add");
    }//后台课程删除
    public function course_upd(){
        return view("course.course_add");
    }//后台课程修改
    public function course_upd_do(){
        return view("course.course_add");
    }//后台课程修改执行
    public function question_add(){
        
        $Question=new Question();
        $Question->question_name=request()->question_name;
        $Question->question_contents=request()->question_contents;
        $Question->question_yescten=request()->question_yescten;
        $Question->question_ttype=request()->question_ttype;
        $Question->question_score=request()->question_score;
        $Question->question_type=request()->question_type;
        $Question->question_bian=request()->question_bian;
        $Question->per_id=request()->per_id;
        $Question->question_time=time();
        if($Question->save()){
            $arr=[
                "code"=>1111,
                "msg"=>"题库添加成功",
                "url"=>"/question/question_list"
            ];
        }else{
            $arr=[
                "code"=>1110,
                "msg"=>"题库添加失败",
                "url"=>"/question/question_list"
            ];
        } 
        return json_encode($arr);
    }//后台题库添加
    public function question_list(){
        
        $Personal=new Personal();
        $per=$Personal->get();
        $question_name=request()->question_name;
        $where=[];
        if($question_name){
            $where[]=[
              'question_name','like',"%$question_name%"
            ];
        }
        $res=Question::leftjoin("personal","personal.per_id","=","question.per_id")->where($where)->paginate(2);
        // dd($res);
        return view("question.question_add",["per"=>$per,"res"=>$res]);
    }//后台题库展示
    public function question_del(){
        $question_id = request()->all();
//        dd($question_id);
        $res = Question::where('question_id',$question_id)->delete();
        if($res){
            $arr = [
                "code"=>11111,
                "msg"=>"删除成功",
                "url"=>"/question/question_list"
            ];
        }else{
            $arr = [
                "code"=>11112,
                "msg"=>"删除失败"
            ];
        }
        return json_encode($arr);
    }//后台题库删除
    public function question_upd(){
        $question_id = request()->question_id;
        $per = Personal::get();
        $question = new Question();
        $data = $question->leftjoin("personal","question.per_id","=","personal.per_id")->where("question_id",$question_id)->first()->toArray();
        return view("question.question_upd",["data"=>$data,"per"=>$per]);
    }//后台题库修改
    public function question_upd_do(){
        $data = request()->all();
        $res = Question::where(["question_id"=>$data["question_id"]])->update($data);
        if($res){
            $arr = [
                "code"=>9999,
                "msg"=>"修改成功",
                "url"=>"/question/question_list"
            ];
        }else{
            $arr = [
                "code"=>9998,
                "msg"=>"修改失败"
            ];
        }
        return json_encode($arr);
        return view("question.question_add");
    }//后台题库修改执行
    public function info_add(){
        return view("info.info_add");
    }//后台资讯添加
    public function info_list(){
        return view("info.info_list");
    }//后台资讯展示
    public function info_del(){
        return view("info.info_add");
    }//后台资讯删除
    public function info_upd(){
        return view("info.info_add");
    }//后台资讯修改
    public function info_upd_do(){
        return view("info.info_add");
    }//后台资讯修改执行
    public function personal_add(){
        return view("personal.personal_add");
    }//后台讲师添加
    public function personal_list(){
        return view("personal.personal_list");
    }//后台讲师展示
    public function personal_del(){
        return view("personal.personal_add");
    }//后台讲师删除
    public function personal_upd(){
        return view("personal.personal_add");
    }//后台讲师修改
    public function personal_upd_do(){
        return view("personal.personal_add");
    }//后台讲师修改执行
    public function answer_add(){
        return view("answer.answer_add");
    }//后台问答添加
    public function answer_list(){
        return view("answer.answer_list");
    }//后台问答展示
    public function answer_del(){
        return view("answer.answer_add");
    }//后台问答删除
    public function answer_upd(){
        return view("answer.answer_add");
    }//后台问答修改
    public function answer_upd_do(){
        return view("answer.answer_add");
    }//后台问答修改执行
    public function exam_add(){
        return view("exam.exam_add");
    }//后台考试添加
    public function exam_list(){
        return view("exam.exam_list");
    }//后台考试展示
    public function exam_del(){
        return view("exam.exam_add");
    }//后台考试删除
    public function exam_upd(){
        return view("exam.exam_upd");
    }//后台考试修改
    public function exam_upd_do(){
        return view("exam.exam_add");
    }//后台考试修改执行
    public function notice_add(){
        $Notice=new Notice();
        $Notice->notice_name=request()->notice_name;
        $Notice->notice_content=request()->notice_content;
        $Notice->notice_time=time();
        // dd($Notice->notice_time);
        if($Notice->save()){
            $arr=[
                "code"=>0000,
                "msg"=>"公告添加成功",
                "url"=>"/notice/notice_list"
            ];
        }else{
            $arr=[
                "code"=>0001,
                "msg"=>"公告添加失败",
                "url"=>"/notice/notice_list"
            ];
        } 
        return json_encode($arr);
    }//后台公告添加
    public function notice_list(){
        $notice_name=request()->notice_name;
        $where=["notice_del"=>1];
        if($notice_name){
            $where[]=[
              'notice_name','like',"%$notice_name%"
            ];
        }
        $Notice=new Notice();
        
        $data= $Notice->where($where)->paginate(2);
        // dd($data);
        return view("notice.notice_list",['data'=>$data]);
    }//后台公告展示
    public function notice_del(){
        $notice_id = request()->all();
//        dd($notice_id);
        $res = Notice::where('notice_id',$notice_id)->update(['notice_del'=>2]);
        if($res){
            $arr = [
                "code"=>00000,
                "msg"=>"删除成功",
                "url"=>"/notice/notice_list"
            ];
        }else{
            $arr = [
                "code"=>00001,
                "msg"=>"删除失败"
            ];
        }
        return json_encode($arr);
    }//后台公告删除
    public function notice_upd(){
        $notice_id=request()->notice_id;
       // dd($notice_id);
        $Notice=new Notice();
        $res=$Notice->where('notice_id',$notice_id)->first();
       // dd($res);
        return view("notice.notice_upd",['res'=>$res]);
        
    }//后台公告修改
    public function notice_upd_do(){
        $data=request()->all();
        // dd($data);
        $notice_id=$data['notice_id'];
        // dd($notice_id);
        $Notice=new Notice();
        $Noticeinfo=$Notice->where("notice_id",$notice_id)->update($data);
        if($Noticeinfo){
            $arr=[
                'code'=>'00000',
                'msg'=>"修改成功",
                'url'=>"/notice/notice_list"
            ];
        }else{
            $arr=[
                'code'=>'00001',
                'msg'=>"修改失败",
            ];
        }
        return json_encode($arr);
    }//后台公告修改执行


    public function singcho_add(){
        $Question=new Question();
        $data = request()->question_contents.",".request()->question_contentss.",".request()->question_contentsss.",".request()->question_contentssss;
        // dd($data);
        $Question->question_name=request()->question_name;
        $Question->question_contents= $data;
        $Question->question_yescten=request()->question_yescten;
        $Question->question_ttype=request()->question_ttype;
        $Question->question_score=request()->question_score;
        $Question->question_type=request()->question_type;
        $Question->question_bian=request()->question_bian;
        $Question->per_id=request()->per_id;
        $Question->question_time=time();
        if($Question->save()){
            $arr=[
                "code"=>2222,
                "msg"=>"题库单选题添加成功",
                "url"=>"/singcho/singcho_list"
            ];
        }else{
            $arr=[
                "code"=>2221,
                "msg"=>"题库单选题添加失败",
                "url"=>"/singcho/singcho_list"
            ];
        } 
        return json_encode($arr);
    }//后台题库单选题添加
    public function singcho_list(){
        $Personal=new Personal();
        $per=$Personal->get();
        $res=Question::leftjoin("personal","personal.per_id","=","question.per_id")->paginate(2);
        // dd($res);
        return view("singcho.singcho_list",["per"=>$per,"res"=>$res]);
    }//后台题库单选题展示
    public function singcho_del(){
        $question_id = request()->all();
//        dd($question_id);
        $res = Question::where('question_id',$question_id)->delete();
        if($res){
            $arr = [
                "code"=>11111,
                "msg"=>"删除成功",
                "url"=>"/question/question_list"
            ];
        }else{
            $arr = [
                "code"=>11112,
                "msg"=>"删除失败"
            ];
        }
        return json_encode($arr);
    }//后台题库单选题删除
    public function singcho_upd(){
        $question_id = request()->question_id;
        $per = Personal::get();
        $question = new Question();
        $data = $question->leftjoin("personal","question.per_id","=","personal.per_id")->where("question_id",$question_id)->first()->toArray();
        $question_contents=explode(',',$data['question_contents']);
        // dd($question_contents);
        return view("singcho.singcho_upd",["data"=>$data,"per"=>$per,"question_contents"=>$question_contents]);
    }//后台题库单选题修改多选题
    public function singcho_upd_do(){
        return view("singcho.singcho_upd_do");
    }//后台题库单选题修改执行
    public function mucho_add(){
       $Question=new Question();
        $data = request()->question_contents.",".request()->question_contentss.",".request()->question_contentsss.",".request()->question_contentssss;
        // dd($data);
        $Question->question_name=request()->question_name;
        $Question->question_contents= $data;
        $Question->question_yescten=request()->question_yescten;
        $Question->question_ttype=request()->question_ttype;
        $Question->question_score=request()->question_score;
        $Question->question_type=request()->question_type;
        $Question->question_bian=request()->question_bian;
        $Question->per_id=request()->per_id;
        $Question->question_time=time();
        if($Question->save()){
            $arr=[
                "code"=>3333,
                "msg"=>"题库多选题添加成功",
                "url"=>"/mucho/mucho_list"
            ];
        }else{
            $arr=[
                "code"=>3334,
                "msg"=>"题库多选题添加失败",
                "url"=>"/mucho/mucho_list"
            ];
        } 
        return json_encode($arr);
    }//后台多选题添加
    public function mucho_list(){
        $Personal=new Personal();
        $per=$Personal->get();
        $res=Question::leftjoin("personal","personal.per_id","=","question.per_id")->paginate(2);
        // dd($res);
        return view("mucho.mucho_list",["per"=>$per,"res"=>$res]);
    }//后台多选题展示
    public function mucho_del(){
        $question_id = request()->all();
//        dd($question_id);
        $res = Question::where('question_id',$question_id)->delete();
        if($res){
            $arr = [
                "code"=>5555,
                "msg"=>"删除成功",
                "url"=>"/mucho/mucho_list"
            ];
        }else{
            $arr = [
                "code"=>5554,
                "msg"=>"删除失败"
            ];
        }
        return json_encode($arr);
    }//后台多选题删除
    public function mucho_upd(){
        return view("mucho.mucho_upd");
    }//后台多选题修改
    public function mucho_upd_do(){
        return view("mucho.mucho_add");
    }//后台多选题修改执行
}
    