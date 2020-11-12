<!DOCTYPE html>
<html>

<head>
    <!-- 页面meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>在线教育后台管理系统</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no" name="viewport">

    <link rel="stylesheet" href="/admin/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/admin/plugins/adminLTE/css/AdminLTE.css">
    <link rel="stylesheet" href="/admin/plugins/adminLTE/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="/admin/css/style.css">

    <script src="/admin/plugins/jQuery/jquery-2.2.3.min.js"></script>
    <script src="/admin/plugins/jQueryUI/jquery-ui.min.js"></script>
    <script src="/admin/plugins/bootstrap/js/bootstrap.min.js"></script>

    <script src="/admin/plugins/adminLTE/js/app.min.js"></script>
    <script src="/plugins/jquery/jquery.min.js"></script>
    <script src="/admin/js/uploadify/jquery.js"></script>
    <link rel="stylesheet" href="/admin/js/uploadify/uploadify.css">
    <script src="/admin/js/uploadify/jquery.uploadify.js"></script>
</head>
<body class="hold-transition skin-green sidebar-mini" >
<!-- 页面头部 -->
@include("nav.admin_top")
<!-- 导航侧栏 -->
@include("nav.admin_left")
<!-- 内容区域 -->
<div class="content-wrapper">
    <!-- 正文区域 -->
    <div class="box-header with-border">
    <h1 class="box-title">用户角色添加</h1>
</div>
<section class="content">
    <div class="box-body">
        <div class="nav-tabs-custom">
            <div class="tab-content">
                <div class="tab-pane active" id="home">
                    <div class="row data-type">
                        <div class="col-md-2 title">用户名称</div>
                        <div class="col-md-10 data">
                            <input type="hidden" class="form-control"  placeholder="用户名称" id="u_id" value="{{$user->u_id}}">
                            <span>{{$user->u_name}}</span>
                        </div>
                        <div class="col-md-2 title">角色名称</div>
                        <div class="col-md-10 data">
                            @foreach($role as $k=>$v)
                            <input type="checkbox"   placeholder="用户名称" name="role_id" id="role_id" value="{{$v->role_id}}">{{$v->role_name}}
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="btn-toolbar list-toolbar">
        <button class="btn btn-primary" id="button"><i class="fa fa-save"></i>添加</button>
    </div>
</section>
    <!-- 正文区域 /-->
    <!-- 底部导航 -->
</div>
</body>
@include("nav.admin_foot")
</html>
<script>
    $(document).on('click','#button',function(){
        // alert(111);
        var u_id = $('#u_id').val();
        var check =[];
        $("input[type='checkbox']:checked").each(function(){
            check.push($(this).val());
        });
        $.ajax({
            type:"post",
            dataType:"json",
            url:"/userrole/store",
            data:{u_id:u_id,role_id:check},
            success:function(res){
                if(res.code=='0'){
                    alert(res.mag)
                    location.href='/userrole/index'
                }
            }
        })
    })
</script>
