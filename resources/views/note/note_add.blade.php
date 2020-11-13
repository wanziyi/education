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
    <!-- 导航侧栏 -->
    @include("nav.admin_left")
    <!-- 内容区域 -->
    <div class="content-wrapper">
        {{--<iframe width="100%" id="iframe" name="iframe"	onload="SetIFrameHeight()" frameborder="0" src="home.html">--}}
{{--//======================================================================================================================--}}
        <body class="hold-transition skin-red sidebar-mini" >
        <!-- .box-body -->
        <div class="box-header with-border">
            <h3 class="box-title">用户笔记管理</h3>
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
                    <thead>
                    <tr>
                        <th class="" style="padding-right:0px">
                            <input id="selall" type="checkbox" class="icheckbox_square-blue">
                        </th>
                        <th class="sorting_asc">用户笔记ID</th>
                        <th class="sorting">用户笔记内容</th>
                        <th class="sorting">用户笔记添加时间</th>
                        <th class="text-center">操作</th>
                    </tr>
                    </thead>
                    @foreach($data as $v)
                    <tbody>
                    <tr note_id="{{$v->note_id}}" >
                        <td></td>
                        <td>{{$v->note_id}}</td>
                        <td>{{$v->note_text}}</td>
                        <td>{{date("Y-m-d H:i:s",$v->note_time)}}</td>
                        <td class="text-center">
                            <button type="button" id="del" note_id="{{$v->note_id}}">删除</button>
                            <button type="button"><a href="{{url('/note/note_upd')}}">修改</a></button>
                        </td>
                    </tr>
                    </tbody>
                    @endforeach
                </table>
                {{$data->links()}}
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
                        <h3 id="myModalLabel">用户笔记 模板编辑</h3>
                    </div>
                    <div class="modal-body">
                        <form  id="fileForm" >

                        <table class="table table-bordered table-striped"  width="800px">
                            <tr>
                                <td>用户笔记名称</td>
                                <td><input  class="form-control" placeholder="" name="" id="note_text">  </td>
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
    <!-- 底部导航 /-->
</div>
</body>
</html>
<script>
    $(document).on("click","#button",function(){
        var note_text = $("#note_text").val();
        // alert(note_text);
        // return 
        $.ajax({
            url:"/note/note_list",
            dataType:"json",
            type:"POST",
            data:{note_text:note_text},
            success:function(res){
                if(res.code==00004){
                     alert(res.message)
                    window.location.href=res.url;
                }else{
                     alert(res.message)
                    window.location.href=res.url;
                }
            }
        })
    })
    $(document).on("click","#del",function(){
        var note_id = $(this).parents("tr").attr("note_id");
        // alert(note_id)
        // return 
        $.ajax({
            url:"/note/note_del",
            data:{note_id:note_id},
            type:"post",
            dataType:"json",
            success:function(res){
                if(res.code==00006){
                     alert(res.message)
                    window.location.href=res.url
                }else{
                     alert(res.message)
                    window.location.href=res.url
                }
            }
        })
    })
</script>