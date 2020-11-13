<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\CategoryModel;
use App\Model\CataModel;

class CataController extends Controller
{
    public function cata_add(){
    	$res = CategoryModel::get();
    	return view("catagory.cata_add",['res'=>$res]);
    }
    public function store(){
    	// echo 11;
    	$cata_name = request()->post('cata_name');
    	$cate_id = request()->post('cate_id');
    	// echo $cata_name;
    	// echo $cate_id;
    	$data = [
    		'cata_name'=>$cata_name,
    		'cate_id'=>$cate_id
    	];
    	$res = CataModel::insert($data);
    	// dd($res);
    	if($res){
            return['code'=>'0','mag'=>"课程目录成功"];
        }else{
            return['code'=>'1','mag'=>"课程目录失败"];
        }
    }

    public function del(){
    	$cata_id=request()->cata_id;
        // dd($cata_id);die;
        $res = CataModel::where(['cata_id'=>$cata_id])->update(['cata_del'=>2]);
        // dd($res);
        if($res){
            return['code'=>'0','mag'=>"课程目录删除成功"];
        }else{
            return['code'=>'1','mag'=>"课程目录删除失败"];
        }
    }
    public function cata_list(){
    	$res = CataModel::where(['cata_del'=>1])->get();
    	return view("catagory.cata_list",['res'=>$res]);
    }

    public function update(){
    	return view("catagory.update");
    }
}
