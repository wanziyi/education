
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
            <h3 class="box-title">课程资料管理</h3>
        </div>

        <div class="box-body">

            <!-- 数据表格 -->
            <div class="table-box">

                <!--工具栏-->
                <div class="pull-left">
                    <div class="form-group form-inline">
                        <div class="btn-group">
                            <a  href="{{url('/coursedata/coursedata_add')}}" class="btn btn-default" title="新建" ><i class="fa fa-file-o"></i> 新建</a>
                        </div>
                    </div>
                    <input type="text" id="cd_name"  value="">
                    <button class="submit">搜索</button>
                    
                </div>
                
                <!--工具栏/-->
                <!--数据列表-->
                <table id="dataList" class="table table-bordered table-striped table-hover dataTable">
                    <thead>
                    <tr>
                        <th class="" style="padding-right:0px">
                            <input id="selall" type="checkbox" class="icheckbox_square-blue">
                        </th>
                        <th class="sorting_asc">资料ID</th>
                        <th class="sorting">资料标题</th>
                        <th class="sorting">资料名称</th>
                        <th class="sorting">资料内容</th>
                        <th class="text-center">操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($res as $v)
                        @if($v->is_del==0)
                    <tr id="{{$v->cd_id}}">
                        <td><input  type="checkbox"></td>
                        <td>{{$v->cd_id}}</td>
                        <td>{{$v->cd_title}}</td>
                        <td>{{$v->cd_name}}</td>
                        <td>{{$v->cd_text}}</td>
                        <td class="text-center">
                            <button type="button" class="btn bg-olive btn-xs del">删除</button>
                            <a href="{{url('coursedata/coursedata_upd/'.$v->cd_id)}}">
                                <button type="button" class="btn bg-olive btn-xs">修改</button>
                            </a>
                        </td>
                    </tr>
                    @endif
                @endforeach
                <tr>
                    <td align="center" colspan="7">{{$res->appends(['cd_name'=>$cd_name])->links()}}</td>       
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
$(document).ready(function(){
        $(document).on("click",".del",function(){
            var _this = $(this);
            var cd_id= _this.parents("tr").prop("id");
            //alert(cd_id);
            $.ajax({
                url:"{{url('coursedata/coursedata_del')}}",
                data:{cd_id:cd_id},
                type:"post",
                success:function(res){
                    if(res==1){
                        alert("删除成功");
                        _this.parents("tr").remove();
                        location.href="{{url('coursedata/coursedata_list')}}";
                    }else{
                        alert("删除失败");
                    }
                }


            })
        });

        $(document).on("click",".submit",function(){
            var  cd_name=$("#cd_name").val();//搜索名称
            var _this=$(this);
            $.ajax({
                url:"{{url('coursedata/coursedata_list')}}",
                type:"post",
                data:{cd_name:cd_name},
                success:function(res){
                    $("tbody").html(res);

                }
            })
                  return;
        });

        //$(document).on("click",'.page-item a',function(){

        //var url = $(this).attr('href');

        //$.get(url,function(res){
  
         //$('tbody').html(res);

       //});
       //return false;
     //});

    });
    $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }})
</script>
