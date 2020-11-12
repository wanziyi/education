
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
        {{--<iframe width="100%" id="iframe" name="iframe"	onload="SetIFrameHeight()" frameborder="0" src="home.html">--}}

{{--//======================================================================================================================--}}

        <body class="hold-transition skin-red sidebar-mini" >
        <!-- .box-body -->

        <div class="box-header with-border">
            <h3 class="box-title">公告管理</h3>
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
                <form>
                <div class="box-tools pull-right">
                    <div class="has-feedback">
                        公告名称：<input type="text" name="notice_name">
                        <input type="submit" value="搜索">
                    </div>
                </div>
                </form>
                
                <!--工具栏/-->
                <!--数据列表-->
                <table id="dataList" class="table table-bordered table-striped table-hover dataTable">
                    <thead>
                    <tr>
                        <th class="" style="padding-right:0px">    
                            <input id="selall" type="checkbox" class="icheckbox_square-blue">
                        </th>
                        <th class="sorting_asc">公告ID</th>
                        <th class="sorting">公告名称</th>
                        <th class="sorting">公告内容</th>
                        <th class="sorting">公告时间</th>
                        <th class="text-center">操作</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $v)
                    <tr notice_id="{{$v->notice_id}}">
                        <th class="" style="padding-right:0px">
                            <input id="selall" type="checkbox" class="icheckbox_square-blue">
                        </th>
                        <td>{{$v["notice_id"]}}</td>
                        <td>{{$v["notice_name"]}}</td>
                        <td>{{$v["notice_content"]}}</td>
                        <td>{{date("Y-m-d H:i:s"),$v->notice_time}}</td>
                        <td class="text-center">
                            <button type="button"  id="del">删除</button>
                            <button type="button"  ><a href="{{url('/notice/notice_upd?notice_id='.$v->notice_id)}}">修改</a></button>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>

                </table>
                <!--数据列表/-->
                {{$data->links()}}

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
                        <h3 id="myModalLabel">公告模板添加</h3>
                    </div>
                    <div class="modal-body">
                        <form  id="fileForm" >

                        <table class="table table-bordered table-striped"  width="800px">
                            <tr>
                                <td>公告名称</td>
                                <td><input  class="form-control" placeholder="" name="notice_name" id="notice_name">  </td>
                            </tr>
                            <tr>
                                <td>公告内容</td>
                                <td><input  class="form-control" placeholder="" name="notice_content" id="notice_content">  </td>
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
        var notice_name=$("#notice_name").val();
        var notice_content=$("#notice_content").val();
        // alert(notice_content);
        $.ajax({
            url:'/notice/notice_add',
            dataType:'json',
            type:'POST',
            async:false,
            data:{notice_name:notice_name,notice_content:notice_content},
            success:function(res){
                if(res.code=="0000"){
                    // alert(res.message)
                    window.location.href=res.url;
                }else{
                    alert(res.msg);
                }
            }
        })
    })

$(document).on("click","#del",function(){

        var notice_id=$(this).parents("tr").attr("notice_id");
        // alert(notice_id);
    $.ajax({
        url:"/notice/notice_del",
        data:{notice_id:notice_id},
        type:"post",
        dataType:"json",
        success:function(res){
            if(res.code=="00000"){
                // alert(res.msg);
                window.location.href=res.url;
            }else{
                alert(res.msg);
            }
        }
    })
})
</script>