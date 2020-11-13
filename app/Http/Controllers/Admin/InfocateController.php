<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\InfocateModel;
class InfocateController extends Controller
{
	//后台资讯添加
	public function infocate_add(){
        if(request()->isMethod("get")){
			return view("infocate.infocate_add");
		}
		if(request()->isMethod("post")){

			$all=request()->all();
			$all['add_time']=time();
			$a=InfocateModel::insert($all);
			if($a){
				return 1;
			}

		}
    }
    //后台资讯展示
    public function infocate_list(){
    	$cate_name=request()->cate_name;

		$res=InfocateModel::where("is_del",0)->paginate(2);
			
		if(request()->ajax() ){
			
			
			//return $ad_name;
			$where=[];
			$where[]=['cate_name',"like","%$cate_name%"];

			$res=InfocateModel::OrderBy("cate_id","desc")->where("is_del",0)->where($where)->paginate(1);
				return view("infocate.infocate_list",['res'=>$res,'cate_name'=>$cate_name]);
			}

			return view("infocate.infocate_list",['res'=>$res,'cate_name'=>$cate_name]);
    }//后台资讯删除
    public function infocate_del(){
        $cate_id=	request()->cate_id;
		$res=InfocateModel::where("cate_id",$cate_id)->update(['is_del'=>1]);
		if($res){
			return 1;
		}
    }//后台资讯修改
    public function infocate_upd($id){
    		$res=InfocateModel::where('cate_id',$id)->first();
		return view('infocate.infocate_upd',compact('res'));

		}//后台资讯修改执行
    public function infocate_upd_do(){
    	if(request()->isMethod('get')){

			return view('infocate.infocate_upd_do');
		}

		if(request()->isMethod('post')){

			if(empty($_FILES['crowd_file'])){

				$cate_name = request()->cate_name;

				$is_hot = request()->is_hot;

				$cate_id = request()->cate_id;

				$where = [
						["cate_name", '=', $cate_name],
						['cate_id', '<>', $cate_id]
				];

				$first = InfoModel::where($where)->first();

				if ($first) {
					errorone('资讯名称已存在!');
				}

				$data = [
						'cate_name' => $cate_name,
						'is_hot' => $is_hot,
						'add_time' => time()

				];
			}else {

				$file = upload('crowd_file');

				$cate_name = request()->cate_name;

				$is_hot = request()->is_hot;

				$cate_id = request()->cate_id;

				$where = [
						["cate_name", '=', $cate_name],
						['cate_id', '<>', $cate_id]
				];

				$first = InfocateModel::where($where)->first();

				if ($first) {
					errorone('资讯名称已存在!');
				}

				$data = [

						'cate_name' => $cate_name,
						'is_hot' => $is_hot,
						'add_time' => time()

				];
			}
			$wheres=[
					['cate_id','=',$cate_id]
			];
			$brand = InfocateModel::where($wheres)->update($data);
			



		}
    }
}
