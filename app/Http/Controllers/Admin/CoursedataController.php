<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\CoursedataModel;
class CoursedataController extends Controller
{
	//后台资讯添加
	public function coursedata_add(){
        if(request()->isMethod("get")){
			return view("coursedata.coursedata_add");
		}
		if(request()->isMethod("post")){

			$all=request()->all();
			$a=CoursedataModel::insert($all);
			if($a){
				return 1;
			}

		}
    }
    //后台资讯展示
    public function coursedata_list(){
    	$cd_name=request()->cd_name;

		$res=CoursedataModel::where("cd_del",0)->paginate(2);
			
		if(request()->ajax() ){
			
			
			//return $ad_name;
			$where=[];
			$where[]=['cd_name',"like","%$cd_name%"];

			$res=CoursedataModel::OrderBy("cd_id","desc")->where("cd_del",0)->where($where)->paginate(2);
				return view("coursedata.ajaxinfo_list",['res'=>$res,'cd_name'=>$cd_name]);
			}

			return view("coursedata.coursedata_list",['res'=>$res,'cd_name'=>$cd_name]);
    }//后台资讯删除
    public function coursedata_del(){
        $cd_id=	request()->cd_id;
		$res=CoursedataModel::where("cd_id",$cd_id)->update(['cd_del'=>1]);
		if($res){
			return 1;
		}
    }//后台资讯修改
    public function coursedata_upd($id){
    		$res=CoursedataModel::where('cd_id',$id)->first();
		return view('coursedata.coursedata_upd',compact('res'));

		}//后台资讯修改执行
    public function coursedata_upd_do(){
    	if(request()->isMethod('get')){

			return view('coursedata.coursedata_upd_do');
		}

		if(request()->isMethod('post')){

			if(empty($_FILES['crowd_file'])){

				$cd_name = request()->cd_name;

				$cd_title = request()->cd_title;

				$cd_text = request()->cd_text;

				$cd_id = request()->cd_id;

				$where = [
						["cd_name", '=', $cd_name],
						['cd_id', '<>', $cd_id],
						['cd_title', '<>', $cd_title]
				];

				$first = CoursedataModel::where($where)->first();

				if ($first) {
					errorone('资讯名称已存在!');
				}

				$data = [
						'cd_name' => $cd_name,
						'cd_text' => $cd_text,
						'cd_title' => $cd_title,

				];
			}else {

				$file = upload('crowd_file');

				$cd_name = request()->cd_name;

				$cd_text = request()->cd_text;

				$cd_title = request()->cd_title;

				$cd_id = request()->cd_id;

				$where = [
						["cd_name", '=', $cd_name],
						['cd_id', '<>', $cd_id],
						["cd_title", '=', $cd_title]
				];

				$first = CoursedataModel::where($where)->first();

				if ($first) {
					errorone('资讯名称已存在!');
				}

				$data = [

						'cd_name' => $cd_name,
						'cd_text' => $cd_text,
						'cd_title' => $cd_title,

				];
			}
			$wheres=[
					['cd_id','=',$cd_id]
			];
			$brand = CoursedataModel::where($wheres)->update($data);
			



		}
    }
}
