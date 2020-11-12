<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Rotation;
use Storage;

class RotationController extends Controller
{
    public function add(){
        $rotation = new Rotation;
        $data = request()->all();
        $res = $rotation::insert($data);
        $rota = $rotation->where("rota_del","=",1)->get();
        $rotation->rota_img = $data["rota_img"];
        if($res){
            $arr = [
                "code"=>0000,
                "msg"=>"OK",
                'url'=>"/rotation/rotation_add",
            ];
        }else{
            $arr = [
                "code"=>0001,
                "msg"=>"NO",
                'url'=>"/rotation/rotation_add"
            ];
        }
        return  json_encode($arr);
    }//前台轮播图添加
    public function upload(Request $request){
        $arr = $_FILES["Filedata"];
        $tmpName = $arr["tmp_name"];
        $ext = explode(".",$arr["name"])[1];
        $newFileName = uniqid().".".$ext;
        $newFilePath = "./imgs/".$newFileName;
        move_uploaded_file($tmpName,$newFilePath);
        $newFilePath = trim($newFilePath,".");
        echo $newFilePath;
    }
    public function rotation_show(){
        return view("rotation.rotation_show");
    }//前台轮播图展示
    public function rotation_add(){
        $rotation = new Rotation;
        $where = [
            "rota_del"=>1
        ];
        $rota = Rotation::where($where)->paginate(2);
        return view("rotation.rotation_add",["rota"=>$rota]);
    }
    public function rotation_del(){
        $rota_id = request()->rota_id;
        $rota = new Rotation();
        $info = Rotation::where("rota_id",$rota_id)->update(["rota_del"=>0]);
        if($info){
            $arr = [
                "code"=>00002,
                "message"=>"轮播图删除成功",
                "url"=>"/rotation/rotation_add"
            ];
        }else{
            $arr = [
                "code"=>00003,
                "message"=>"轮播图删除失败",
                "url"=>"/rotation/rotation_add"
            ];
        }
        return json_encode($arr);
    }
    public function rotation_upd($rota_id){
        $data = Rotation::where(["rota_id"=>$rota_id])->first();
        return view("rotation.rotation_upd",["data"=>$data]);
    }
    public function rotation_upd_do(){
        $data = request()->all();
        $rotation = new Rotation;
        $data = Rotation::where(["rota_id"=>$data["rota_id"]])->update($data);
        dd($data);
        if($data){
            $arr=[
                "code"=>000004,
                "message"=>"修改成功",
                "url"=>"/rotation/rotation_add"
            ];
        }else{
            $arr=[
                "code"=>000005,
                "message"=>"修改失败",
                "url"=>"/rotation/rotation_add"
            ];
        }
        return json_encode($arr,JSON_UNESCAPED_UNICODE);
    }
}
