<!DOCTYPE html>
<html>

<head>
    <!-- 页面meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>在线教育后台管理系统</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no" name="viewport">
    <script src="/uploadess/jquery.js"></script>
    <link rel="stylesheet" href="/uploadess/uploadify.css">
    <script src="/uploadess/jquery.uploadify.js"></script>
    <link rel="stylesheet" href="/admin/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/admin/plugins/adminLTE/css/AdminLTE.css">
    <link rel="stylesheet" href="/admin/plugins/adminLTE/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="/admin/css/style.css">
    <script src="/admin/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="/admin/plugins/adminLTE/js/app.min.js"></script>

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
        <h1 class="box-title">权限管理</h1>
    </div>
    <section class="content">
        <div class="box-body">
            <div class="nav-tabs-custom">
                <div class="tab-content">
                    <div class="tab-pane active" id="home">
                        <div class="row data-type">
                            <input type="hidden" id="priv_id" value="{{$data->priv_id}}">
                            <div class="col-md-2 title">权限名称</div>
                            <div class="col-md-10 data">
                                <input type="text" class="form-control"  placeholder="权限名称" value="{{$data->priv_name}}" id="priv_name">
                            </div>
                            <div class="col-md-2 title">权限路由</div>
                            <div class="col-md-10 data">
                                <input type="text" class="form-control"  placeholder="权限路由" value="{{$data->priv_url}}" id="priv_url">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="btn-toolbar list-toolbar">
            <button class="btn btn-primary" id="but"><i class="fa fa-save"></i>修改</button>
        </div>
    </section>
    <!-- 正文区域 /-->
    <!-- 底部导航 -->
</div>
</body>
@include("nav.admin_foot")
</html>
<script>
    $(document).on("click","#but",function(){
        var priv_id = $("input[id='priv_id']").val();
        var priv_name = $("input[id='priv_name']").val();
        var priv_url = $("input[id='priv_url']").val();
        $.ajax({
            url:"{{url('/rbac/priv_upDo')}}",
            type:'POST',
            data:{priv_name:priv_name,priv_url:priv_url,priv_id:priv_id},
            dataType:'json',
            success:function(res){
                if(res.code==0000){
                    alert(res.msg);
                    window.location.href=res.url;
                }else{
                    alert(res.msg);
                    window.location.href=res.url;
                }
            }
        })
    })
</script>
