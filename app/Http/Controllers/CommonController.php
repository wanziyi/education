<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommonController extends Controller
{
    /**
     * 封装成功时的方法
     * @param $errno
     * @param $msg
     * @param array $data
     * @return array
     */
    
  
    /**
     * 无限极分类
     */
    public function getCateInfo($cateInfo,$pid=0,$level=1){
        static $info=[];
        foreach($cateInfo as $k=>$v){
            if($v['pid']==$pid){
                $v['level']=$level;
                $info[]=$v;
                $this->getCateInfo($cateInfo,$v['cate_id'],$v['level']+1);
            }
        }
        return $info;
}
}

