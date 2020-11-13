
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
        {{--<iframe width="100%" id="iframe" name="iframe"	onload="SetIFrameHeight()" frameborder="0" src="home.html">--}}

{{--//======================================================================================================================--}}

        <body class="hold-transition skin-red sidebar-mini" >
        <!-- .box-body -->

        <div class="box-header with-border">
            <h3 class="box-title">用户作业管理</h3>
        </div>

        <div class="box-body">

            <!-- 数据表格 -->
            <div class="table-box">

                <!--工具栏-->
                <form >
                    <input type="text" name="priv_name" placeholder="请您先输入您所要搜索的关键字">
                    <button class="btn btn-default" type="submit">查询</button>
                </form >
                <!--工具栏/-->
                <!--数据列表-->
                <table id="dataList" class="table table-bordered table-striped table-hover dataTable">
                    <thead>
                    <tr>
                        <th class="" style="padding-right:0px">
                            <input id="selall" type="checkbox" class="icheckbox_square-blue">
                        </th>
                        <th class="sorting_asc">作业id</th>
                        <th class="sorting">作业出题人</th>
                        <th class="sorting">科目</th>
                        <th class="sorting">问题</th>
                        <th class="text-center">操作</th>
                    </tr>
                    </thead>
                    @foreach($data as $k=>$v)
                    <tbody>
                    <tr>
                        <td></td>
                        <td>{{$v->task_id}}</td>
                        <td>{{$v->u_name}}</td>
                        <td>{{$v->cur_name}}</td>
                        <td>{{$v->task_name}}</td>
                        <td class="text-center">
                            <button type="button"  class="btn btn-success"  task_id="{{$v->task_id}}" id="delz">删除</button>
                            <button type="button"  class="btn btn-success">
                                <a href="#">修改</a>
                            </button>
                        </td>
                    </tr>
                    </tbody>
                    @endforeach
                </table>
                <!--数据列表/-->
                {{$data->links()}}
            </div>
            <!-- 数据表格 /-->
        </div>
        <!-- /.box-body -->
        <!-- 编辑窗口 -->
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
    $(document).on("click","#delz",function(){
        var task_id = $(this).attr("task_id");
        $.ajax({
            url:"{{url('/task/user_job_del')}}",
            type:'POST',
            data:{task_id:task_id},
            dataType:'json',
            success:function(res){
                if(res.code==00000){
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
