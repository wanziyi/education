
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

    <script src="/admin/plugins/adminLTE/js/app.min.js"></script>

    {{--<script type="text/javascript">--}}
    {{--function SetIFrameHeight(){--}}
    {{--var iframeid=document.getElementById("iframe"); //iframe id--}}
    {{--if (document.getElementById){--}}
    {{--iframeid.height =document.documentElement.clientHeight;--}}
    {{--}--}}
    {{--}--}}

    {{--</script>--}}

</head>

<body class="hold-transition skin-green sidebar-mini" >

<div class="wrapper">

    <!-- 页面头部 -->
    @include("nav.admin_top")
            <!-- 页面头部 /-->

    <!-- 导航侧栏 -->
    @include("nav.admin_left")
            <!-- 导航侧栏 /-->

    <!-- 内容区域 -->
    <div class="content-wrapper">
        {{--<iframe width="100%" id="iframe" name="iframe"  onload="SetIFrameHeight()" frameborder="0" src="home.html">--}}

{{--//======================================================================================================================--}}

  <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"> 
    <title>Bootstrap 实例 - 水平表单</title>
    <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">  
    <script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>


    <input type="hidden" value="{{$res->notice_id}}" id="notice_id">
    <div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">公告名称</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="公告名称" value="{{$res->notice_name}}" id="notice_name">
        </div>
    </div>
    <div class="form-group">
        <label for="lastname" class="col-sm-2 control-label">公告内容</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="公告内容" value="{{$res->notice_content}}" id="notice_content">
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button id="upd">修改</button>
        </div>
    </div>


</body>
</html>

        {{--</iframe>--}}
    </div>
    <!-- 内容区域 /-->
    <!-- 底部导航 -->
    @include("nav.admin_foot")
            <!-- 底部导航 /-->

</div>

</body>

</html>
<script>
    $(document).on("click","#upd",function(){
        // alert(123);
        var notice_name=$("#notice_name").val();
        // alert(notice_name);
        var notice_content=$("#notice_content").val();
        var notice_id=$("#notice_id").val();
            $.ajax({
                url:'/notice/notice_upd_do',
                dataType:'json',
                type:'POST',
                async:false,
                data:{notice_name:notice_name,notice_content:notice_content,notice_id:notice_id},
                success:function(res){
                    if(res.code=='00000'){
                        // alert(res.msg)
                        window.location.href=res.url;
                    }else{
                        alert(res.msg)
                    }
                }
            })

    })
</script>