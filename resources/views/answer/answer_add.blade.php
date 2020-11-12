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
            <h3 class="box-title">答案添加管理</h3>
        </div>

        <div class="box-body">

            <!-- 数据表格 -->
            <div class="table-box">

                <!--工具栏-->
                <div class="pull-left">
                    <div class="form-group form-inline">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default" title="删除"><i class="fa fa-trash-o"></i> 删除</button>
                            <button type="button" class="btn btn-default" title="刷新" onclick="window.location.reload();"><i class="fa fa-refresh"></i> 刷新</button>
                        </div>
                    </div>
                </div>
                
                <!--工具栏/-->
                
                <!--数据列表-->
                
                <table id="dataList" class="table table-bordered table-striped table-hover dataTable">
                
                    <thead>
                    <form action="">
                    答案内容 <input type="text" name="ans_text" value="{{$ans_text}}" id="" placeholder="请输入搜索关键字">
                    <button>搜索</button>
                </form>
                    <tr>
                        <th class="" style="padding-right:0px">
                            <input id="selall" type="checkbox" class="icheckbox_square-blue">
                        </th>
                        <th class="sorting_asc">问题ID</th>
                        <th class="sorting">问题名称</th>
                        <th class="sorting">答案内容</th>
                        <th class="sorting">答案添加时间</th>
                        <th class="text-center">操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $v)
                    <tr>
                        <td></td>
                        <td>{{$v->ans_id}}</td>
                        <td>{{$v->ans_name}}Java好不好学</td>
                        <td>{{$v->ans_text}}</td>
                        <td>{{date("Y-m-d H:i:s",$v->ans_time)}}</td>
                        <td class="text-center">
                            <button type="button" ans_id="{{$v->ans_id}}" id="del">删除</button>
                            <button type="button"  ><a href="{{url('/answer/answer_upd/'.$v->ans_id)}}">修改</a></button>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                {{$data->appends(["ans_text"=>$ans_text])->links()}}
                <!--数据列表/-->
            </div>
            <!-- 数据表格 /-->
        </div>
        <!-- /.box-body -->
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
            // var ans_name=$("#ans_name").val();
            var ans_text=$("#ans_text").val();
            $.ajax({
                url:'/answer/answer_show',
                dataType:'json',
                type:'POST',
                async:false,
                data:{ans_text:ans_text},
                success:function(res){
                    if(res.code==0000){
                        alert(res.message)
                        window.location.href=res.url;
                    }else{
                        alert(res.message)
                    }
                }
            })
        })
        //删除
        $(document).on("click","#del",function(){
            var ans_id = $(this).attr("ans_id");
            $.ajax({
                url : "/answer/answer_del",
                data : {ans_id:ans_id},
                dataType : "json",
                type : "post",
                success:function(res){
                    if(res.code==00002){
                        alert(res.message);
                        window.location.href=res.url
                    }else{
                        alert(res.message);
                        window.location.href=res.url
                    }
                }
            })
        })
</script>
