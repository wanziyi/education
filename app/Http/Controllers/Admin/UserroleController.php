<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Users;
use App\Model\Urole;
use App\Model\RoleModel;


class UserroleController extends Controller
{
    public function userrole($id){
    	// dd($id);
    	$user=Users::find($id);
    	// dd($user);
    	$role=RoleModel::get();
    	// dd($role);
    	return view("userrole.userrole",['user'=>$user,'role'=>$role]);
    }
    public function store(){
    	// echo 111;
    	$u_id=request()->post('u_id');
    	$role_id = request()->post('role_id');
    	foreach($role_id as $k=>$v){
    		$data=[
    			'u_id'=>$u_id,
    			'role_id'=>$v,
    		];
    		$res = Urole::insert($data);
    		// dd($res);
    		if($res){
            	return['code'=>'0','mag'=>"成功"];
        	}else{
            	return['code'=>'1','mag'=>"失败"];
        	}

    	}
    }
    public function index(){
    	$data=Users::get();
    	foreach($data as $k=>$v){
    		$u_id = Urole::where('u_id',$v->u_id)->get();
    		// dd($u_id);
    		foreach($u_id as $kk=>$vv){
                $role = RoleModel::where("role_id",$vv->role_id)->first();
                $data[$k]["res"].= $role['role_name'].",";
            }
    	}
    	return view("userrole.index",['data'=>$data]);
    }
}
