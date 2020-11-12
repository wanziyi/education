<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Faker\Provider\ko_KR\Person;
use Illuminate\Http\Request;
use App\Model\Personal;
use App\Model\Users;
use App\Model\Priv;
use App\Model\RoleModel;
use App\Model\Rolepriv;

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
                "msg"=>"Success OK",
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
//                "msg"=>"Success OK",
//                "url"=>"/admin/login"
//            ];
//            return json_encode($arr);
//        }else{
//            $arr = [
//                "code"=>0001,
//                "msg"=>"Error NO",
//                "url"=>"/admin/index"
//            ];
//            return json_encode($arr);
//        }
//    }  //退出登录

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
        return view("question.question_add");
    }//后台题库添加

    public function question_list(){
        return view("question.question_list");
    }//后台题库展示

    public function question_del(){
        return view("question.question_add");
    }//后台题库删除

    public function question_upd(){
        return view("question.question_add");
    }//后台题库修改

    public function question_upd_do(){
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
                    "msg"=>"ok",
                    "url"=>"/personal/personal_list",
                ];
            return json_encode($arr);
        }else{
            $arr =
                [
                    "code"=>0001,
                    "msg"=>"no",
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
                    "msg"=>"删除成功",
                    "url"=>"/personal/personal_list",
                ];
            return json_encode($arr);
        }else{
            $arr =
                [
                    "code"=>0001,
                    "msg"=>"no",
                    "url"=>"/personal/personal_list",
                ];
            return json_encode($arr);
        }
        return view("personal.personal_add");
    }//讲师删除

    public function personal_up($per_id)
    {
        $Personal = new Personal;
        $res =$Personal::where("per_id",$per_id)->first();
        return view("personal.personal_up",["res"=>$res]);
    }

    public function personal_upd_do()
    {
        $Personal = new Personal;
        $per_id = request()->per_id;
        $data = request()->all();
        $res = $Personal::where("per_id",$per_id)->update($data);
        if($res){
            $arr =
                [
                    "code"=>0000,
                    "msg"=>"修改成功",
                    "url"=>"/personal/personal_list",
                ];
        }else{
            $arr =
                [
                    "code"=>0001,
                    "msg"=>"no",
                    "url"=>"/personal/personal_list",
                ];
        }
        return json_encode($arr);
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
