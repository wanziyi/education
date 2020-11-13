
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
        {{--<iframe width="100%" id="iframe" name="iframe"  onload="SetIFrameHeight()" frameborder="0" src="home.html">--}}

{{--//======================================================================================================================--}}

    

        <body class="hold-transition skin-red sidebar-mini" >
        <!-- .box-body -->

        <div class="box-header with-border">
            <h3 class="box-title">课程分类管理</h3>
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
                        <h3 id="myModalLabel">课程分类 模板编辑</h3>
                    </div>
                    <div class="modal-body">
                        <form  id="fileForm" >

                        <table class="table table-bordered table-striped"  width="800px">
                            <tr>
                                <td>分类名称</td>
                                <td><input  type="text" class="form-control" placeholder="" name="cate_name" id="">  </td>
                            </tr>
                           <tr>
                                <td>父级id</td>
                                <td>
                                    <select name="pid" id="pid">
                                        <option value="0">顶级分类</option>
                                        @foreach($info as $k=>$v)
                                        <option value="{{$v->cate_id}}"><?php echo str_repeat('&nbsp;&nbsp;&nbsp;&nbsp;',$v['level']) ?>{{$v->cate_name}}</option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                                                     
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button class="btn" data-dismiss="modal" aria-hidden="true" id="button">添加</button>
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
    $(document).on('click','#button',function(){
        var cate_name = $("input[name='cate_name']").val();
        var pid = $("#pid").val();
        // console.log(cate_name);
        // console.log(pid);
         $.ajax({
                url:"/category/store",
                data:{cate_name:cate_name,pid:pid},
                type:"post",
                dataType:"json",
                success:function(res){
                    // alert(111);
                    if(res.code=='0'){
                        alert(res.mag)
                        location.href='/category/cate_list'
                    }
            }
        })
    })
</script>
