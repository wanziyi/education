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
    <!-- 导航侧栏 -->
    @include("nav.admin_left")
    <!-- 内容区域 -->
    <div class="content-wrapper">
        {{--<iframe width="100%" id="iframe" name="iframe"	onload="SetIFrameHeight()" frameborder="0" src="home.html">--}}
{{--//======================================================================================================================--}}
        <body class="hold-transition skin-red sidebar-mini" >
        <!-- .box-body -->
        <div class="box-header with-border">
            <h3 class="box-title">考试管理</h3>
        </div>
        <div class="box-body">
            <!-- 数据表格 -->
            <div class="table-box">
                <!--工具栏-->
                <div class="pull-left">
                    <div class="form-group form-inline">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default" title="新建" data-toggle="modal" data-target="#editModal" ><i class="fa fa-file-o"></i> 新建</button>
                            <button type="button" class="btn btn-default" title="删除"><i class="fa fa-trash-o"></i> 删除</button>

                            <button type="button" class="btn btn-default" title="刷新" onclick="window.location.reload();"><i class="fa fa-refresh"></i> 刷新</button>
                        </div>
                    </div>
                </div>
                <!--工具栏/-->
                <!--数据列表-->
                <table id="dataList" class="table table-bordered table-striped table-hover dataTable">
                <form action="">
                    考试名称 <input type="text" name="exam_name" value="{{$exam_name}}" id="" placeholder="请输入搜索关键字">
                    <button>搜索</button>
                    <thead>
                    <tr>
                        <th class="" style="padding-right:0px">
                            <input id="selall" type="checkbox" class="icheckbox_square-blue">
                        </th>
                        <th class="sorting_asc">考试ID</th>
                        <th class="sorting">考试名称</th>
                        <th class="sorting">考卷名称</th>
                        <th class="sorting">考试开始时间</th>
                        <th class="sorting">考试过期时间</th>
                        <th class="text-center">操作</th>
                    </tr>
                    </thead>
                    @foreach($res as $v)
                    <tbody>
                    <tr note_id="">
                        <td></td>
                        <td>{{$v->exam_id}}</td>
                        <td>{{$v->exam_name}}</td>
                        <td>{{$v->paper_name}}</td>
                        <td>{{date("Y-m-d H:i:s",$v->add_time)}}</td>
                        <td>{{date("Y-m-d H:i:s",$v->past_time)}}</td>
                        <td class="text-center">
                            <button type="button"  exam_id="{{$v->exam_id}}" id="del">删除</button>
                            <button type="button"><a href="{{url('/exam/exam_upd/'.$v->exam_id)}}">修改</a></button>
                        </td>
                    </tr>
                    </tbody>
                    @endforeach
                </table>
                {{$res->links()}}
                <!--数据列表/-->
            </div>
            <!-- 数据表格 /-->
        </div>
        <!-- /.box-body -->
        <!-- 编辑窗口 -->
        <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" >
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h3 id="myModalLabel">考试 模板编辑</h3>
                    </div>
                    <div class="modal-body">
                        <form  id="fileForm" >
                        <table class="table table-bordered table-striped"  width="800px">
                            <tr>
                                <td>考试名称</td>
                                <td>
                                    <input type="text" id="exam_name">
                                </td>
                                <td>考卷名称</td>
                                <td>
                                    <select name="" id="paper_id">
                                        <option value="0">选择考卷</option>
                                        @foreach($data as $v)
                                        <option value="{{$v->paper_id}}">{{$v->paper_name}}</option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>        
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-success" data-dismiss="modal" aria-hidden="true" id="button">添加</button>
                    </div>
                </div>
            </div>
        </div>
        </body>
        </html>
        {{--</iframe>--}}
    </div>
    <!-- 内容区域 /-->
    <!-- 底部导航 -->
    @include("nav.admin_foot")
</div>
</body>
</html>
<script>
    $(document).on("click","#button",function(){
            var exam_name = $("#exam_name").val();
            var paper_id = $("#paper_id").val();
            var paper_name=$("#paper_name").val();
            $.ajax({
                url:'/exam/add',
                dataType:'json',
                type:'POST',
                async:false,
                data:{paper_name:paper_name,paper_id:paper_id,exam_name:exam_name},
                success:function(res){
                    if(res.code==0000){
                        // alert(res.message)
                        window.location.href=res.url;
                    }else{
                        alert(res.message)
                    }
                }
            })
        })
        //删除
        $(document).on("click","#del",function(){
            var exam_id = $(this).attr("exam_id");
            $.ajax({
                url : "/exam/exam_del",
                data : {exam_id:exam_id},
                dataType : "json",
                type : "post",
                success:function(res){
                    if(res.code==00002){
                        // alert(res.message);
                        window.location.href=res.url
                    }else{
                        alert(res.message);
                        window.location.href=res.url
                    }
                }
            })
        })
</script>