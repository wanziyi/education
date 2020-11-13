<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\NavModel;
class NavController extends Controller
{
	//后台资讯添加
	public function navigation_add(){
        if(request()->isMethod("get")){
			return view("navigation.navigation_add");
		}
		if(request()->isMethod("post")){

			$all=request()->all();
			$all['nav_time']=time();
			$a=NavModel::insert($all);
			if($a){
				return 1;
			}

		}
    }
    //后台资讯展示
    public function navigation_list(){
    	$nav_name=request()->nav_name;

		$res=NavModel::where("nav_del",0)->paginate(2);
			
		if(request()->ajax() ){
			
			
			//return $ad_name;
			$where=[];
			$where[]=['nav_name',"like","%$nav_name%"];

			$res=NavModel::OrderBy("nav_id","desc")->where("nav_del",0)->where($where)->paginate(2);
				return view("navigation.ajaxinfo_list",['res'=>$res,'nav_name'=>$nav_name]);
			}

			return view("navigation.navigation_list",['res'=>$res,'nav_name'=>$nav_name]);
    }//后台资讯删除
    public function navigation_del(){
        $nav_id=	request()->nav_id;
		$res=NavModel::where("nav_id",$nav_id)->update(['nav_del'=>1]);
		if($res){
			return 1;
		}
    }//后台资讯修改
    public function navigation_upd($id){
    		$res=NavModel::where('nav_id',$id)->first();
		return view('navigation.navigation_upd',compact('res'));

		}//后台资讯修改执行
    public function navigation_upd_do(){
    	if(request()->isMethod('get')){

			return view('navigation.navigation_upd_do');
		}

		if(request()->isMethod('post')){

			if(empty($_FILES['crowd_file'])){

				$nav_name = request()->nav_name;

				$nav_show = request()->nav_show;

				$nav_id = request()->nav_id;

				$where = [
						["nav_name", '=', $nav_name],
						['nav_id', '<>', $nav_id]
				];

				$first = NavModel::where($where)->first();

				if ($first) {
					errorone('资讯名称已存在!');
				}

				$data = [
						'nav_name' => $nav_name,
						'nav_show' => $nav_show,
						'nav_time' => time()

				];
			}else {

				$file = upload('crowd_file');

				$nav_name = request()->nav_name;

				$nav_show = request()->nav_show;

				$nav_id = request()->nav_id;

				$where = [
						["nav_name", '=', $nav_name],
						['nav_id', '<>', $nav_id]
				];

				$first = NavModel::where($where)->first();

				if ($first) {
					errorone('资讯名称已存在!');
				}

				$data = [

						'nav_name' => $nav_name,
						'nav_show' => $nav_show,
						'nav_time' => time()

				];
			}
			$wheres=[
					['nav_id','=',$nav_id]
			];
			$brand = NavModel::where($wheres)->update($data);
			



		}
    }
}
