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
        <h1 class="box-title">用户作业修改</h1>
    </div>
    <section class="content">
        <div class="box-body">
            <div class="nav-tabs-custom">
                <div class="tab-content">
                    <div class="tab-pane active" id="home">
                        <div class="row data-type">
                            <div class="col-md-2 title">讲师</div>
                            <div class="col-md-10 data">
                                <input type="hidden"  id="u_id" value="{{session('data')->u_id}}">
                                ***
                            </div>
                        </div>
                        <div class="row data-type">
                            <div class="col-md-2 title">课程</div>
                            <div class="col-md-10 data">
                                <select id="cur_id" class="form-control">
                                    <option value="0">--选择课程--</option>
                                    @foreach($cur_data as $k=>$v)
                                        <option value="{{$v->cur_id}}">{{$v->cur_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-2 title">作业题目</div>
                            <div class="col-md-10 data">
                                <input type="text" class="form-control" id="task_name"  placeholder="作业题目">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="btn-toolbar list-toolbar">
            <button class="btn btn-primary" id="add"><i class="fa fa-save"></i>添加</button>
        </div>
    </section>
    <!-- 正文区域 /-->
    <!-- 底部导航 -->
</div>
</body>
@include("nav.admin_foot")
</html>

