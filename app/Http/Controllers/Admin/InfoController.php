<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\InfoModel;

class InfoController extends Controller
{

	public function info_add()
    {
        if(request()->isMethod("get")){
			return view("info.info_add");
		}
		if(request()->isMethod("post")){
			$all=request()->all();
			$all['add_time']=time();
			$a=InfoModel::insert($all);
			if($a){
				return 1;
			}
		}
    }//后台资讯添加


    public function info_list()
    {
    	$info_name=request()->info_name;
		$res=InfoModel::where("is_del",0)->paginate(2);
		if(request()->ajax() ){
			$where=[];
			$where[]=['info_name',"like","%$info_name%"];
			$res=InfoModel::OrderBy("info_id","desc")->where("is_del",0)->where($where)->paginate(2);
				return view("info.ajaxinfo_list",['res'=>$res,'info_name'=>$info_name]);
			}
			return view("info.info_list",['res'=>$res,'info_name'=>$info_name]);
    } //后台资讯展示


    public function info_del()
    {
        $info_id=	request()->info_id;
		$res=InfoModel::where("info_id",$info_id)->update(['is_del'=>1]);
		if($res){
			return 1;
		}
    }//后台资讯删除


    public function info_upd($id){
    		$res=InfoModel::where('info_id',$id)->first();
		return view('info.info_upd',compact('res'));
		}//后台资讯修改


    public function info_upd_do()
    {
    	if(request()->isMethod('get')){
			return view('info.info_upd_do');
		}
		if(request()->isMethod('post')){
			if(empty($_FILES['crowd_file'])){
				$info_name = request()->info_name;
				$info_content = request()->info_content;
				$info_id = request()->info_id;
				$where = [
						["info_name", '=', $info_name],
						['info_id', '<>', $info_id]
				];
				$first = InfoModel::where($where)->first();
				if ($first) {
					errorone('资讯名称已存在!');
				}
				$data = [
						'info_name' => $info_name,
						'info_content' => $info_content,
						'add_time' => time()
				];
			}else {
				$file = upload('crowd_file');
				$info_name = request()->info_name;
				$info_content = request()->info_content;
				$info_id = request()->info_id;
				$where = [
						["info_name", '=', $info_name],
						['info_id', '<>', $info_id]
				];
				$first = InfoModel::where($where)->first();
				if ($first) {
					errorone('资讯名称已存在!');
				}
				$data = [

						'info_name' => $info_name,
						'info_content' => $info_content,
						'add_time' => time()
				];
			}
			$wheres=[
					['info_id','=',$info_id]
			];
			$brand = InfoModel::where($wheres)->update($data);
		}
    }//后台资讯修改执行

}
