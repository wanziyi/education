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
    <h1 class="box-title">角色添加</h1>
</div>
<section class="content">
    <div class="box-body">
        <div class="nav-tabs-custom">
            <div class="tab-content">
                <div class="tab-pane active" id="home">
                    <div class="row data-type">
                        <div class="col-md-2 title">用户名称</div>
                        <div class="col-md-10 data">
                            <input type="text" class="form-control"  placeholder="用户名称" name="u_name" id="user_name" value="">
                        </div>
                        <div class="col-md-2 title">用户密码</div>
                        <div class="col-md-10 data">
                            <input type="password" class="form-control"  placeholder="用户密码" name="u_pwd" id="u_pwd" value="">
                        </div>
                        <div class="col-md-2 title">确认密码</div>
                        <div class="col-md-10 data">
                            <input type="password" class="form-control"  placeholder="确认密码" name="u_pwds" id="u_pwds" value="">
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
        var u_name=$('input[name="u_name"]').val();
        var u_pwd=$('input[name="u_pwd"]').val();
        var u_pwds=$('input[name="u_pwds"]').val();
        // console.log(u_name);
        // console.log(u_pwd);
        // console.log(u_pwds);
        $.ajax({
            url:"/user/store",
            data:{u_name:u_name,u_pwd:u_pwd,u_pwds:u_pwds},
            type:"post",
            dataType:"json",
                success:function(res){
                    // alert(111);
                    if(res.code=='0'){
                        alert(res.mag)
                        location.href='/user/user_list'
                    }
                }
        })
        
    })
</script>
