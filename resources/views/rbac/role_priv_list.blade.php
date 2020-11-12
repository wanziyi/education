
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
            <h3 class="box-title">权限角色管理</h3>
        </div>

        <div class="box-body">

            <!-- 数据表格 -->
            <div class="table-box">

                <!--工具栏-->
                <div class="pull-left">
                    <div class="form-group form-inline">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default" title="新建"  ><i class="fa fa-file-o"></i> 新建</button>
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
                        <th class="sorting_asc">权限id</th>
                        <th class="sorting">权限名称</th>
                        <th class="sorting">权限路径</th>
                        <th class="text-center">操作</th>
                    </tr>
                    </thead>

                    <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="text-center">
                            <button type="button"  class="btn btn-success" id="del">删除</button>
                            <button type="button"  class="btn btn-success">
                                {{--<a href="{{url('/rbac/priv_up/'.$v->priv_id)}}">修改</a>--}}
                            </button>
                        </td>
                    </tr>
                    </tbody>


                </table>
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
<script>
    $(document).on("click","#del",function(){
        priv_id = $(this).attr("priv_id");
        $.ajax({
            url:"{{url('/rbac/priv_del')}}",
            type:'POST',
            data:{priv_id:priv_id},
            dataType:'json',
            success:function(res){
                if(res.code==0000){
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


