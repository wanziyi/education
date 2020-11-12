<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\RoleModel;

class RoleController extends Controller
{
    public function role_add(){
    	return view("role.role_add");
    } 
    public function store(){
    	// echo 111;
    	$role_name = request()->post('role_name');
    	// echo $role_name;
    	$data=[
    		"role_name"=>$role_name,
    	];
    	$res = RoleModel::insert($data);
    	// dd($res);
    	if($res){
            return['code'=>'0','mag'=>"成功"];
        }else{
            return['code'=>'1','mag'=>"失败"];
        }
    }
    public function role_list(){
    	$res = RoleModel::where(['role_del'=>1])->get();
    	return view("role.role_list",['res'=>$res]);
    }

    public function del(){
    	// echo 111;
    	$role_id=request()->role_id;
        // dd($cate_id);
        $res = RoleModel::where(['role_id'=>$role_id])->update(['role_del'=>2]);
        // dd($res);
        if($res){
            return['code'=>'0','mag'=>"成功"];
        }else{
            return['code'=>'1','mag'=>"失败"];
        }
    }
    public function update($id){
    	// echo 111;
    	$data = RoleModel::where('role_id',$id)->first();
    	return view('role.update',['data'=>$data]);
    }

    public function updatedo(){
    	// echo 11;
    	$role_id = request()->post('role_id');
    	$role_name = request()->post('role_name');
    	// echo $role_name;
    	// echo $role_id;die;
    	$data=[
    		"role_name"=>$role_name,
    		"role_id"=>$role_id
    	];
    	$res = RoleModel::where('role_id',$role_id)->update($data);
    	// dd($res);
    	if($res){
            return['code'=>'0','mag'=>"成功"];
        }else{
            return['code'=>'1','mag'=>"失败"];
        }
    }
}
