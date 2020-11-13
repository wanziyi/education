<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Faker\Provider\ko_KR\Person;
use Illuminate\Http\Request;
use App\Http\Model\Notice;
use App\Http\Model\Personal;
use App\Http\Model\Question;
//use App\Model\Personal;
use App\Model\Users;
use App\Model\Priv;
use App\Model\RoleModel;
use App\Model\Rolepriv;
use App\Model\Curriculum;
use App\Model\Task;


class AdminController extends Controller
{
    public function login()
    {
        return view("admin.login");
    }//后台登录

    public function loginDo()
    {
        $u_name = request()->u_name;
        $u_pwd = request()->u_pwd;
        $Users = new Users;
        $data = $Users::where(["u_name"=>$u_name,"u_pwd"=>$u_pwd])->first();
        if($data ==''){

        }else{
            session(["data"=>$data]);
        }
        if($data){

            $arr = [
                "code"=>0000,
                "msg"=>"登陆成功",
                "url"=>"/admin/index"
            ];

        }else{
            $arr = [
                "code"=>0001,
                "msg"=>"密码或账号有误.",
                "url"=>"/admin/login"
            ];

        }
        return json_encode($arr);
    }//登录执行

//    public function logindel()
//    {
//        $res = session(["data"=>null]);
//        if($res == ''){
//            $arr = [
//                "code"=>0000,
//                "msg"=>"退出成功...",
//                "url"=>"/admin/login"
//            ];
//            return json_encode($arr);
//        }else{
//            $arr = [
//                "code"=>0001,
//                "msg"=>"退出失败请稍后再试..",
//                "url"=>"/admin/index"
//            ];
//            return json_encode($arr);
//        }
//    }  //退出登录

    public function index(){
        return view("admin.index");
    }//后台首页

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

    public function question_list()
    {
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
        $res = Question::where('question_id',$question_id)->delete();
        if($res){
            $arr = [
                "code"=>11111,
                "msg"=>"题库删除成功",
                "url"=>"/question/question_list"
            ];
        }else{
            $arr = [
                "code"=>11112,
                "msg"=>"题库删除失败"
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
                "msg"=>"题库修改成功",
                "url"=>"/question/question_list"
            ];
        }else{
            $arr = [
                "code"=>9998,
                "msg"=>"题库修改失败"
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
        return view("info.info_upd");
    }//后台资讯修改

    public function info_upd_do(){
        return view("info.info_add");
    }//后台资讯修改执行

    public function personal_add(){
        return view("personal.personal_add");
    }//后台讲师添加

    public function upload(Request $request)
    {
        $arr = $_FILES["Filedata"];
        $tmpName = $arr['tmp_name'];
        $ext  = explode(".",$arr['name'])[1];
        $newFileName = uniqid().".".$ext;
        $newFilePath = "./images/".$newFileName;
        $aa=move_uploaded_file($tmpName, $newFilePath);
        $newFilePath = trim($newFilePath,".");
        echo $newFilePath;
    }//文件上传

    public function personal_Do(Request $request){
        $data = request()->all();
        $Personal = new Personal;
        $res = $Personal->insert($data);
        if($res){
            $arr =
                [
                    "code"=>0000,
                    "msg"=>"讲师添加成功",
                    "url"=>"/personal/personal_list",
                ];
            return json_encode($arr);
        }else{
            $arr =
                [
                    "code"=>0001,
                    "msg"=>"讲师添加失败",
                    "url"=>"/personal/personal_add",
                ];
            return json_encode($arr);
        }

    }//讲师添加

    public function personal_list(){
        $Personal = new Personal;
        $data = $Personal->paginate(2);
        return view("personal.personal_list",["data"=>$data]);
    }//讲师展示

    public function personal_del(){
        $per_id = request()->per_id;
        $Personal = new Personal;
        $data = $Personal->where(["per_id"=>$per_id])->delete();
        if($data){
            $arr =
                [
                    "code"=>0000,
                    "msg"=>"讲师删除成功",
                    "url"=>"/personal/personal_list",
                ];
            return json_encode($arr);
        }else{
            $arr =
                [
                    "code"=>0001,
                    "msg"=>"讲师删除失败",
                    "url"=>"/personal/personal_list",
                ];
            return json_encode($arr);
        }
        return view("personal.personal_add");
    }//后台讲师删除

    public function personal_upd(){
        return view("personal.personal_add");
    }//后台讲师修改

    public function personal_upd_do(){
        return view("personal.personal_add");
    }//后台讲师修改执行

    public function personal_up($per_id)
    {
        $Personal = new Personal;
        $res =$Personal::where("per_id",$per_id)->first();
        return view("personal.personal_up",["res"=>$res]);
    }

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
        $res = Question::where('question_id',$question_id)->delete();
        if($res){
            $arr = [
                "code"=>5555,
                "msg"=>"多选题删除成功",
                "url"=>"/mucho/mucho_list"
            ];
        }else{
            $arr = [
                "code"=>5554,
                "msg"=>"多选题删除失败"
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

    public function mycourse()
    {
        return view("mycourse.mycourse");
    }

    //rbac -权限添加
    public function  priv()
    {
        return view("rbac.jurisd");
    }

    //rbac -权限执行
    public function privDo(Request $request)
    {
        $data = request()->all();
        $priv = new Priv;
        $res = $priv->insert($data);
        if($res){
            $arr =
                [
                    "code"=>0000,
                    "msg"=>"Success Ok",
                    "url"=>"/rbac/priv_list"
                ];
        }else{
            $arr =
                [
                    "code"=>0001,
                    "msg"=>"Error No",
                    "url"=>"/rbac/priv"
                ];
        }
        return json_encode($arr);
    }

    //rbac -权限展示
    public function  priv_list()
    {
        $priv = new Priv;
        $data = $priv::where(["priv_del"=>0])->paginate(2);
        return view("rbac.jurisd_list",["data"=>$data]);
    }

    //rbac -权限删除
    public function  priv_del()
    {
        $priv_id = request()->priv_id;
        $priv = new Priv;
        $data = $priv::where(['priv_id'=>$priv_id])->update(['priv_del'=>1]);
        if($data){
            $arr =
                [
                    "code"=>0000,
                    "msg"=>"Success Ok",
                    "url"=>"/rbac/priv_list"
                ];
        }else{
            $arr =
                [
                    "code"=>0001,
                    "msg"=>"Error No",
                    "url"=>"/rbac/priv_list"
                ];
        }
        return json_encode($arr);
    }

    //rbac -权限修改展示
    public function  priv_up($id)
    {
        $priv = new Priv;
        $data = $priv::where(["priv_id"=>$id])->first();
        return view("rbac.jurisd_up",["data"=>$data]);
    }

    //rbac -权限修改展示
    public function  priv_upDo()
    {
        $priv_id = request()->priv_id;
        $priv_name = request()->priv_name;
        $priv_url = request()->priv_url;
        $priv = new Priv;
        $data = [
            "priv_name"=>$priv_name,
            "priv_url"=>$priv_url,
        ];
        $res = $priv::where(["priv_id"=>$priv_id])->update($data);
        if($res){
            $arr =
                [
                    "code"=>0000,
                    "msg"=>"Success Ok",
                    "url"=>"/rbac/priv_list"
                ];
        }else{
            $arr =
                [
                    "code"=>0001,
                    "msg"=>"Error No",
                    "url"=>"/rbac/priv_list"
                ];
        }
        return json_encode($arr);

    }

    //rbac -角色权限 -添加
    public function role_priv()
    {
        $Priv = new Priv;
        $Role = new RoleModel;
        $priv_data = $Priv::all();
        $role_data = $Role::all();
        return view("rbac.role_priv",["priv_data"=>$priv_data,"role_data"=>$role_data]);
    }

    //rbac -角色权限执行
    public function role_privDo()
    {
        $role_id = request()->role_id;
        $priv_id = request()->priv_id;
        $priv_id = implode($priv_id,",");
        $data = [
            "role_id"=>$role_id,
            "priv_id"=>$priv_id,
            "time"=>time()
        ];
        $res = Rolepriv::insert($data);
        if($res){
            $arr =
                [
                    "code"=>0000,
                    "msg"=>"Success Ok",
                    "url"=>"/rbac/role_priv_list"
                ];
        }else{
            $arr =
                [
                    "code"=>0001,
                    "msg"=>"Error No",
                    "url"=>"/rbac/role_priv"
                ];
        }
        return json_encode($arr);
    }

    //用户作业
    public function user_job()
    {
        $curriculum = new Curriculum;
        $cur_data = $curriculum::all();
        return view("task.user_job",["cur_data"=>$cur_data]);
    }

    //用户作业执行
    public function  jobDo()
    {
        $data = request()->all();
        $data["task_time"] = time();
        $task = new Task;
        $res = $task::insert($data);
        if($res){
            $arr =
                [
                    "code"=>0000,
                    "msg"=>"Success Ok",
                    "url"=>"/task/user_job_list"
                ];
        }else{
            $arr =
                [
                    "code"=>0001,
                    "msg"=>"Error No",
                    "url"=>"/task/user_job"
                ];
        }
        return json_encode($arr);
    }

    //用户作业展示
    public function user_job_list()
    {
        $task = new Task;
        $where = [
            "task_del"=>0
        ];
        $data = $task::where($where)->
        leftjoin("users","users.u_id","=","task.u_id")
            ->leftjoin("curriculum","curriculum.cur_id","=","task.cur_id")->paginate(3);
        return view("task.user_job_list",["data"=>$data]);
    }

    //用户作业删除
    public function user_job_del()
    {
        $task_id = request()->task_id;
        $task = new Task;
        $res = $task::where(["task_id"=>$task_id])->update(["task_del"=>1]);
        if($res){
            $arr =
                [
                    "code"=>00000,
                    "msg"=>"删除 Ok",
                    "url"=>"/task/user_job_list"
                ];
        }else{
            $arr =
                [
                    "code"=>00001,
                    "msg"=>"删除 No",
                    "url"=>"/task/user_job_list"
                ];
        }
        return json_encode($arr);

    }

    //rbac -角色权限展示
    public function role_priv_list()
   {

       $data = RoleModel::get();
       // $data = Rolepriv::get();
       // dd($data);
       foreach ($data as $k=>$v){
           $role_id = Rolepriv::where("role_id",$v->role_id)->get();
           // dd($role_id);
           foreach($role_id as $kk=>$vv){
                $priv = Priv::where("priv_id",$vv->priv_id)->first();
                $data[$k]["res"].= $priv->priv_name.",";
            }
       }
       // dd($data);
       return view("rbac.role_priv_list",["data"=>$data]);
   }
}
    