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
            <h3 class="box-title">答案列表管理</h3>
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
                        <th class="sorting_asc">问题ID</th>
                        <th class="sorting">答案内容</th>
                        <th class="sorting">答案添加时间</th>
                        <th class="text-center">操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr >
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="text-center">
                            <button type="button"  id="del">删除</button>
                            <button type="button"  >修改</button>
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
        <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" >
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h3 id="myModalLabel">答案 模板编辑</h3>
                    </div>
                    <div class="modal-body">
                        <form  id="fileForm" >
                            <table class="table table-bordered table-striped"  width="800px">
                                {{--//<tr>
                                    <td>答案名称</td>
                                    <td><input  class="form-control" placeholder="请填写答案名称" name="ans_name" id="ans_name">  </td>
                                </tr> //--}}
                                <tr>
                                    <td>答案内容</td>
                                    <td><textarea placeholder= name="ans_text" id="ans_text" cols="30" rows="10"></textarea></td>
                                </tr> 
                            </table>
                        </form>
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

