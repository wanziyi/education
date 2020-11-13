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
            return['code'=>'0','mag'=>"成功"];
        }else{
            return['code'=>'1','mag'=>"失败"];
        }
    }

    public function del(){
    	$cata_id=request()->cata_id;
        // dd($cata_id);die;
        $res = CataModel::where(['cata_id'=>$cata_id])->update(['cata_del'=>2]);
        // dd($res);
        if($res){
            return['code'=>'0','mag'=>"成功"];
        }else{
            return['code'=>'1','mag'=>"失败"];
        }
    }
    public function cata_list(){
    	$res = CataModel::where(['cata_del'=>1])->get();
    	return view("catagory.cata_list",['res'=>$res]);
    }

    public function update($id){
        $res = CategoryModel::get();
        $data = CataModel::where('cata_id',$id)->first();
    	return view("catagory.update",['res'=>$res,'data'=>$data]);
    }

    public function updatedo(){
        // echo 111;
        $cata_id = request()->post('cata_id');
        $cata_name = request()->post('cata_name');
        $cate_id = request()->post('cate_id');
        // echo $cata_name;
        // echo $cate_id;
        $data = [
            'cata_id'=>$cata_id,
            'cata_name'=>$cata_name,
            'cate_id'=>$cate_id
        ];
        $res = CataModel::where('cata_id',$cata_id)->update($data);
        // dd($res);
        if($res){
            return['code'=>'0','mag'=>"成功"];
        }else{
            return['code'=>'1','mag'=>"失败"];
        }
    }
}
