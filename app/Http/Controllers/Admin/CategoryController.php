<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\CommonController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\CategoryModel;

class CategoryController extends CommonController
{
    public function cate_add(){
    	$cateInfo = CategoryModel::get();
    	// dd($cateinfo);die;
    	$info=$this->getCateInfo($cateInfo);
    	return view("category.cate_add",compact("info"));
    }

    public function store(){
    	// echo 111;
    	$cate_name=request()->post("cate_name");
    	$pid=request()->post("pid");
    	// echo $cate_name;
    	// echo $pid;
    	$data=[
    		"cate_name"=>$cate_name,
    		"pid"=>$pid
    	];
    	$res = CategoryModel::insert($data);
    	// dd($res);die;
    	if($res){
            return['code'=>'0','mag'=>"成功"];
        }else{
            return['code'=>'1','mag'=>"失败"];
        }
    }

    public function cate_list(){
    	$cateinfo=CategoryModel::where(['cate_del'=>1])->get();
    	$info = $this->getCateInfo($cateinfo);
    	return view("category.cate_list",['info'=>$info]);
    }

    public function del(){
    	$cate_id=request()->cate_id;
    	// dd($cate_id);
    	$res = CategoryModel::where(['cate_id'=>$cate_id])->update(['cate_del'=>2]);
    	// dd($res);
    	if($res){
            return['code'=>'0','mag'=>"成功"];
        }else{
            return['code'=>'1','mag'=>"失败"];
        }
    }
}
