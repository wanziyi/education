<!DOCTYPE html>
<html>

<head>
    <!-- 页面meta -->
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>在线教育后台管理系统</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no" name="viewport">
    <script type="text/javascript" charset="utf-8" src="/admin/js/uploaded/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="/admin/js/uploaded/ueditor.all.js"></script>

    <link rel="stylesheet" href="/admin/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/admin/plugins/adminLTE/css/AdminLTE.css">
    <link rel="stylesheet" href="/admin/plugins/adminLTE/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="/admin/css/style.css">

    <script src="/admin/plugins/jQuery/jquery-2.2.3.min.js"></script>
    <script src="/admin/plugins/bootstrap/js/bootstrap.min.js"></script>

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
            <h3 class="box-title">导航栏管理</h3>
        </div>

        <div class="box-body">

            <!-- 数据表格 -->
            <div class="table-box">

                <!--工具栏-->
                
                <!--工具栏/-->
                <!--数据列表-->
                <div class="tab-content">
                            <!--表单内容-->

                            <div class="tab-pane active" id="home">
                                   <form enctype="multipart/form-data" id="fileForm">
                                        <div class="row data-type" >

                                    <div class="col-md-2 title">导航栏名称</div>
                                    <div class="col-md-10 data">
                                        <input type="text" class="form-control" name="nav_name" id="nav_name"   placeholder="导航栏名称" value="{{$res->nav_name}}">
                                    </div>

                                    <div class="col-md-2 title">是否展示</div>
                                    <div class="col-md-10 data">
                                        <div class="input-group">
                                        @if($res->nav_show==1)
                                           <input type="radio" checked name="nav_show" value="1">是
                                            <input type="radio" name="nav_show" value="0">否
                                        @else
                                           <input type="radio"  name="nav_show" value="1">是
                                            <input type="radio" checked name="nav_show" value="0">否
                                        @endif
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="btn-toolbar list-toolbar">
                      <a href="javascript:void(0);" id="btn_add_file" class="btn btn-primary" ng-click="setEditorValue();save() " ids="{{$res->nav_id}}"><i class="fa fa-save"></i>修改</a>
                      <a href="{{url('/navigation/navigation_list')}}" class="btn btn-default" ng-click="goListPage()">返回列表</a>
                  </div>
                                    </form>
                            </div>
                        </div>
                <!--数据列表/-->


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
<script type="text/javascript" charset="utf-8">//初始化编辑器
        window.UEDITOR_HOME_URL = "/ueditor/";//配置路径设定为UEditor所放的位置
        window.onload=function(){
            window.UEDITOR_CONFIG.initialFrameHeight=300;//编辑器的高度
            window.UEDITOR_CONFIG.initialFrameWidth=750;//编辑器的宽度
            var editor = new UE.ui.Editor({
                imageUrl : '',
                fileUrl : '',
                imagePath : '',
                filePath : '',
                imageManagerUrl:'', //图片在线管理的处理地址
                imageManagerPath:'__ROOT__/'
            });
            editor.render("info_content");//此处的EditorId与<textarea name="info_content" id="EditorId">的id值对应 </textarea>

        }
    </script>

    <script type="text/javascript">
    $("#btn_add_file").on("click",function(){
        var nav_name=$("#nav_name").val();
        var nav_show = $("input[name='nav_show']:checked").val();
        var nav_id=$(this).attr("ids");
        $.ajax({
            url:"{{url('navigation/navigation_upd_do')}}",
            data:{nav_id:nav_id,nav_name:nav_name,nav_show:nav_show},
            type:"post",
            success:function(res){
                if(res==1){
                    alert("修改成功");
                    location.href="{{url('navigation/navigation_list')}}";
                }else{
                    alert("修改成功");
                    location.href="{{url('navigation/navigation_list')}}";
                }
            }
        
        });



    });
    $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }})
</script>
