<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Users;

class UserController extends Controller
{
    public function user_add(){
    	return view('user.user_add');
    }
    public function store(){
    	// echo 11;
    	$u_name=request()->post('u_name');
    	$u_pwd=request()->post('u_pwd');
    	// echo $u_name;
    	// echo $u_pwds;
    	$data=[
    		'u_name'=>$u_name,
    		'u_pwd'=>$u_pwd
    	];
    	$res = Users::insert($data);
    	// dd($res);
    	if($res){
            return['code'=>'0','mag'=>"成功"];
        }else{
            return['code'=>'1','mag'=>"失败"];
        }
    	

    }
    public function user_list(){
    	$res = Users::get();
    	return view('user.user_list',['res'=>$res]);
    }
}
