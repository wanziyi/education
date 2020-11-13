<?php

namespace App\Http\Middleware;

use Closure;
use App\Model\Priv;
use App\Model\Users;
use App\Model\RoleModel;
use App\Model\Rolepriv;
use App\Model\Urole;

class Checkrbac
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $res = session("data");
        // echo $res;die;
        $quanxian = Users::
                    leftjoin('user_role','users.u_id','=','user_role.u_id')
                    ->leftjoin('role','user_role.role_id','=','role.role_id')
                    ->leftjoin('rolepriv','role.role_id','=','rolepriv.role_id')
                    ->where('users.u_id',$res['u_id'])
                    ->get();
                     // dd($quanxian);

                foreach ($quanxian as $k => $v) {
                    if($v->u_id==2){
                        return $next($request);
                    }
                    // echo 1111;die;
                }

                foreach($quanxian as $key=>$val){
                $priv_url[]=$val->right_url;
                }
                if(empty($priv_url)){
                    echo "<script>alert('抱歉，您没有权限访问,请找管理员添加权限');window.history.go(-1);</script>";exit;
                }
                if(!in_array($priv_url,$priv_url)){
                    echo "<script>alert('没有权限访问');window.history.go(-1);</script>";exit;
                }
                return $next($request);

         
    }
}
