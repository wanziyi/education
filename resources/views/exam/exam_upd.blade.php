

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

<form class="form-horizontal" role="form">
    <div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">考试名称</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="firstname">
        </div>
    </div>
    <div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">题库编号</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="firstname">
        </div>
    </div>
    
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">修改</button>
        </div>
    </div>
</form>

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
                    <input type="hidden" value="{{$data->exam_id}}"  id="exam_id">
                    <div class="tab-pane active" id="home">
                        <div class="row data-type">
                            <div class="col-md-2 title">考试名称</div>
                            <div class="col-md-10 data">
                                <input type="text" class="form-control"  value="{{$data->exam_name}}" id="exam_name">
                            </div>
                        </div>
                        <div class="row data-type">
                            <div class="col-md-2 title">考卷名称</div>
                            <div class="col-md-10 data">
                                <select name="" id="paper_name">
                                @foreach($paper as $v)
                                    <option @if($v->paper_id==$data->paper_id) selected @endif value="{{$v->paper_id}}">{{$v->paper_name}}</option>
                                @endforeach
                                </select>
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
        var exam_id = $('#exam_id').val();
        // alert(exam_id);
        // return 
        var exam_name = $('#exam_name').val();
        var paper_id = $('#paper_name').val();
        // alert(paper_name);return;
        $.ajax({
            url:'/exam/exam_upd_do',
            dataType:'json',
            type:'post',
            data:{exam_id:exam_id,exam_name:exam_name,paper_id:paper_id},
            success: function(res){
                if(res.code==00004){
                    // alert(res.message)
                    window.location.href=res.url
                }else{
                    alert(res.message)
                    window.location.href=res.url
                }
            }
        });
    })
</script>
