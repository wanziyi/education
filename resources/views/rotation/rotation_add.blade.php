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

    <script src="/admin/js/plugins/jquery/jquery.min.js"></script>
    <script src="/uploadify/jquery.js"></script>
    <link rel="stylesheet" href="/uploadify/uploadify.css">

    <script src="/uploadify/jquery.uploadify.js"></script>
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
            <h3 class="box-title">轮播图管理</h3>
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
                        <th class="sorting_asc">轮播图ID</th>
                        <th class="sorting">轮播图图片</th>
                        <th class="sorting">轮播图地址</th>
                        <th class="sorting">是否展示</th>
                        <th class="text-center">操作</th>
                    </tr>
                    </thead>
                    @foreach($rota as $v)
                    <tbody>
                    <tr  >
                        <td></td>
                        <td>{{$v->rota_id}}</td>
                        <td><img src="{{$v->rota_img}}" width="100" height="100"></td>
                        <td>{{$v->rota_url}}</td>
                        <td>@if($v->rota_show==1)是 @else  否  @endif</td>
                        <td class="text-center">
                            <button type="button" id="del" rota_id="{{$v->rota_id}}">删除</button>
                            <button type="button"><a href="{{url('/rotation/rotation_upd/'.$v->rota_id)}}">修改</a></button>
                        </td>
                    </tr>
                    </tbody>
                    @endforeach
                </table>
                {{$rota->links()}}
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
                        <h3 id="myModalLabel">轮播图 模板编辑</h3>
                    </div>
                    <div class="modal-body">
                        <form  id="fileForm" >
                        <table class="table table-bordered table-striped"  width="800px">
                            <tr>
                                <td>轮播图图片</td>
                                <td>
                                    <input class="form-control" id="uploadify" type="file" name="rota_img" />
                                    <div class="showing"></div>
                                    <input type="hidden" name="img_path">
                                </td>
                            </tr>  
                            <tr>
                                <td>是否展示</td>
                                <td>
                                    <input  type="radio" name="rota_show" id="rota_show" value="1" checked/>是
                                    <input  type="radio" name="rota_show" id="rota_show" value="2"/>否
                                </td>
                            </tr>   
                            <tr>
                                <td>url地址</td>
                                <td><input  class="form-control" placeholder="" name="" id="rota_url">  </td>
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
    // 上传图片
    $(document).ready(function(){
		$("#uploadify").uploadify({
			uploader: "/rotation/upload",
			swf: "/js/uploadify/uploadify.swf",
			onUploadSuccess:function(res,data,msg){
                var imgPath  = data;
				var imgstr = "<img src='"+imgPath+"' style='width:100px'>";
				$("input[name='img_path']").val(imgPath);
				$(".showimg").append(imgstr);
			}
		});
	});
    $(document).on("click","#button",function(){
        var rota_img = $("input[name='img_path']").val();
        var rota_show = $("#rota_show:checked").val();
        var rota_url = $("#rota_url").val();
        $.ajax({
            url:"/rotation/add",
            dataType:"json",
            type:"POST",
            data:{rota_img:rota_img,rota_show:rota_show,rota_url:rota_url},
            success:function(res){
                if(res.code==00004){
                    window.location.href=res.url;
                }else{
                    window.location.href=res.url;
                }
            }
        })
    })
    //删除
        $(document).on("click","#del",function(){
            var rota_id = $(this).attr("rota_id");
            $.ajax({
                url : "/rotation/rotation_del",
                data : {rota_id:rota_id},
                dataType : "json",
                type : "post",
                success:function(res){
                    if(res.code==00002){
                        window.location.href=res.url
                    }else{
                        alert(res.message);
                        window.location.href=res.url
                    }
                }
            })
        })
</script>