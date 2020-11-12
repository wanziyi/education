<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\LinksModel;
class LinksController extends Controller
{
	//后台资讯添加
	public function links_add(){
        if(request()->isMethod("get")){
			return view("links.links_add");
		}
		if(request()->isMethod("post")){

			$all=request()->all();
			$a=LinksModel::insert($all);
			if($a){
				return 1;
			}

		}
    }
    //后台资讯展示
    public function links_list(){
    	$links_name=request()->links_name;

		$res=LinksModel::where("links_del",0)->paginate(2);
			
		if(request()->ajax() ){
			
			
			//return $ad_name;
			$where=[];
			$where[]=['links_name',"like","%$links_name%"];

			$res=LinksModel::OrderBy("links_id","desc")->where("links_del",0)->where($where)->paginate(2);
				return view("links.ajaxinfo_list",['res'=>$res,'links_name'=>$links_name]);
			}

			return view("links.links_list",['res'=>$res,'links_name'=>$links_name]);
    }//后台资讯删除
    public function links_del(){
        $links_id=	request()->links_id;
		$res=LinksModel::where("links_id",$links_id)->update(['links_del'=>1]);
		if($res){
			return 1;
		}
    }//后台资讯修改
    public function links_upd($id){
    		$res=LinksModel::where('links_id',$id)->first();
		return view('links.links_upd',compact('res'));

		}//后台资讯修改执行
    public function links_upd_do(){
    	if(request()->isMethod('get')){

			return view('links.links_upd_do');
		}

		if(request()->isMethod('post')){

			if(empty($_FILES['crowd_file'])){

				$links_name = request()->links_name;

				$links_url = request()->links_url;

				$links_show = request()->links_show;

				$links_id = request()->links_id;

				$where = [
						["links_name", '=', $links_name],
						['links_id', '<>', $links_id]
				];

				$first = LinksModel::where($where)->first();

				if ($first) {
					errorone('资讯名称已存在!');
				}

				$data = [
						'links_name' => $links_name,
						'links_show' => $links_show,
						'links_url' => $links_url

				];
			}else {

				$file = upload('crowd_file');

				$links_name = request()->links_name;

				$links_show = request()->links_show;

				$links_url = request()->links_url;

				$links_id = request()->links_id;

				$where = [
						["links_name", '=', $links_name],
						['links_id', '<>', $links_id]
				];

				$first = LinksModel::where($where)->first();

				if ($first) {
					errorone('资讯名称已存在!');
				}

				$data = [

						'links_name' => $links_name,
						'links_show' => $links_show,
						'links_url' => $links_url

				];
			}
			$wheres=[
					['links_id','=',$links_id]
			];
			$brand = LinksModel::where($wheres)->update($data);
			



		}
    }
}
