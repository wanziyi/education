
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
            <h3 class="box-title">课程管理</h3>
        </div>

        <div class="box-body">

            <!-- 数据表格 -->
            <div class="table-box">

                <!--工具栏-->
              
                
                <!--工具栏/-->
                <!--数据列表-->
                <form>
                    <input type="text" name="cur_name">
                    <input type="submit" value="搜索">
                </form>
                <table id="dataList" class="table table-bordered table-striped table-hover dataTable">
                    <thead>
                    <tr>
                        <th class="" style="padding-right:0px">
                            <input id="selall" type="checkbox" class="icheckbox_square-blue">
                        </th>
                        <th class="sorting_asc">课程ID</th>
                        <th class="sorting">课程分类</th>
                        <th class="sorting">课程名称</th>
                        <th class="sorting">课程总课时</th>
                        <th class="sorting">课程时长</th>
                        <th class="sorting">课程简介</th>
                        <th class="text-center">操作</th>
                    </tr>
                    </thead>
                    @foreach($res as $k=>$v)
                    <tbody>
                        
                    <tr >
                        <td></td>
                        <td>{{$v->cur_id}}</td>
                        <td>{{$v->cate_id}}</td>
                        <td>{{$v->cur_name}}</td>
                        <td>{{$v->cur_class}}</td>
                        <td>{{$v->hour}}</td>
                        <td>{{$v->cur_content}}</td>
                        <td class="text-center">
                            <button type="button"  id="del" cur_id="{{$v->cur_id}}">删除</button>
                            <button type="button"><a href="{{url('/course/update/'.$v->cur_id)}}">编辑</a></button>
                        </td>
                    </tr>
                        
                         
                    </tbody>
                    @endforeach
                        <tr>
                            <td colspan="10">{{$res->appends($query)->links()}}</td>
                        </tr>
                        
                            
                        
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
                        <h3 id="myModalLabel">课程 模板编辑</h3>
                    </div>
                    <div class="modal-body">
                        <form  id="fileForm" >

                        <table class="table table-bordered table-striped"  width="800px">
                            <tr>
                                <td>课程名称</td>
                                <td><input  class="form-control" placeholder="" name="" id="">  </td>
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
    $(document).on('click','#del',function(){
        // alert(11);
        var cur_id = $(this).attr('cur_id');
        // console.log(cate_id);
        $.ajax({
            url:'/course/del',
            data:{cur_id:cur_id},
            type:'post',
            dataType:'json',
            success:function(res){
                if(res.code=='0'){
                        alert(res.mag)
                        location.href='/course/course_list'
                }
            }
        })
    })
</script>
