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
    <script src="/admin/plugins/bootstrap/js/bootstrap.min.js"></script>
</head>
<body class="hold-transition skin-green sidebar-mini" >
<!-- 页面头部 -->
@include("nav.admin_top")
<!-- 导航侧栏 -->
@include("nav.admin_left")
<!-- 内容区域 -->
<div class="content-wrapper">
    <!-- 正文区域 -->
    <section class="content">
        <div class="box-body">
            <!--tab页-->
            <div class="nav-tabs-custom">
                <!--tab内容-->
                <div class="tab-content">
                    <!--表单内容-->
                    <input type="hidden" value="{{$data->rota_id}}"  id="rota_id">
                    <div class="tab-pane active" id="home">
                        <div class="row data-type">
                            <div class="col-md-2 title">轮播图图片</div>
                            <div class="col-md-10 data">
                                <input type="text" class="form-control"  value="{{$data->rota_img}}" id="exam_name">
                            </div>
                        </div>
                        <div class="row data-type">
                            <div class="col-md-2 title">轮播图地址</div>
                            <div class="col-md-10 data">
                                <input type="text" class="form-control" value="{{$data->rota_url}}" id="rota_url">
                            </div>
                        </div>
                        <div class="row data-type">
                            <div class="col-md-2 title">是否展示</div>
                            <div class="col-md-10 data">
                                <input type="radio" value="{{$data->rota_show}}">是
                                <input type="radio" value="{{$data->rota_show}}">否
                            </div>
                        </div>
                    </div>
                    <!--tab内容/-->
                    <!--表单内容/-->
                </div>
            </div>
            <div class="btn-toolbar list-toolbar">
                <button  id="upd">修改</button>
            </div>
            </div>
    </section>
    <!-- 正文区域 /-->
</div>
</body>
@include("nav.admin_foot")
</html>
<script>
$(document).on("click","#upd",function(){
        var rota_id = $('#rota_id').val();
        // alert(rota_id);
        var rota_img = $('#rota_img').val();
        var rota_url = $('#rota_url').val();
        var rota_show = $("#rota_show:checked").val();
        $.ajax({
            url:'/rotation/rotation_upd_do',
            dataType:'json',
            type:'post',
            data:{rota_id:rota_id,rota_img:rota_img,rota_url:rota_url,rota_show:rota_show},
            success: function(res){
                if(res.code==00004){
                    window.location.href=res.url
                }else{
                    alert(res.message)
                    window.location.href=res.url
                }
            }
        });
    })
</script>