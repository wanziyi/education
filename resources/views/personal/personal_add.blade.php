
<!DOCTYPE html>
<html>

<head>
    <!-- 页面meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>在线教育后台管理系统</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no" name="viewport">
    <script src="/uploadess/jquery.js"></script>
    <link rel="stylesheet" href="/uploadess/uploadify.css">
    <script src="/uploadess/jquery.uploadify.js"></script>
    <link rel="stylesheet" href="/admin/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/admin/plugins/adminLTE/css/AdminLTE.css">
    <link rel="stylesheet" href="/admin/plugins/adminLTE/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="/admin/css/style.css">
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
            <h3 class="box-title">讲师管理</h3>
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
                        <h3 id="myModalLabel">讲师 模板添加</h3>
                    </div>
                    <div class="modal-body">
                        <form  id="fileForm" >

                        <table class="table table-bordered table-striped"  width="800px">
                            <tr>
                                <td>讲师名称</td>
                                <td><input  class="form-control" placeholder="讲师名称"  id="per_name"></td>
                            </tr>

                            <tr>
                                <td>讲师简介</td>
                                <td><textarea id="per_content" placeholder="讲师简介..."></textarea></td>
                            </tr>
                            <tr>
                                <td>讲师图片</td>
                                <td>
                                    <input type="file" class="form-control" id="uploadify"  name="per_img" placeholder="商品图片">
                                    <div class="showimg"></div>
                            </tr>
                            <tr>
                                <td>讲师家庭住址</td>
                                <td><input  class="form-control" placeholder="讲师家庭住址..."  id="per_address">  </td>
                            </tr>
                            <tr>
                                <td>讲师年龄</td>
                                <td><input  class="form-control" placeholder="讲师年龄...."  id="per_age">  </td>
                            </tr>
                            <tr>
                                <td>讲师电话</td>
                                <td><input  class="form-control" placeholder="讲师电话...." id="per_tel">  </td>
                            </tr>
                            <tr>
                                <td>讲师课程</td>
                                <td><select  id="cur_id">
                                        <option value="0">选择授课科目</option>
                                        <option value="1">php</option>
                                        <option value="2">java</option>
                                        <option value="3">c++</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>讲师授课风格</td>
                                <td><textarea id="per_style" placeholder="讲师授课风格..."></textarea></td>
                            </tr>
                        </table>
                            </form>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-success" data-dismiss="modal" aria-hidden="true" id="but">添加讲师个人信息</button>
                    </div>
                </div>
            </div>
        </div>

        </body>

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
        $("#uploadify").uploadify({
            uploader: "/personal/upload",
            swf: "/uploadess/uploadify.swf",
            onUploadSuccess:function(res,data){
                var imgPath  = data+'';
//                alert(img);return
//                var imgstr = "<img src='"+imgPath+"' style='width:100px'>";
                $(".showimg").append(imgPath);
//                $("input[name='img_path']").val(imgPath);
//                $(".showimg").append(imgstr);
//                var video_str = "<video src='"+imgPath+"' controls='controls' style='width:400px;height:200px;'>";
//                $(".showimg").append(video_str);
            }
        });
    })
</script>
<script>
    //传输数据至添加
    $(document).on("click","#but",function(){
        per_name = $("input[id='per_name']").val();
        per_content = $("textarea[id='per_content']").val();
        per_img = $(".showimg").text();
        per_address = $("input[id='per_address']").val();
        per_age = $("input[id='per_age']").val();
        per_tel = $("[id='per_tel']").val();
        cur_id = $("select[id='cur_id']").val();
        per_style = $("textarea[id='per_style']").val();
        // console.log(cur_id)
        $.ajax({
            url:"{{url('/personal/personal_Do')}}",
            type:'POST',
            data:{per_name:per_name,per_content:per_content,per_img:per_img,per_address:per_address,per_age:per_age,per_tel:per_tel,cur_id:cur_id,per_style:per_style},
            dataType:'json',
            success:function(res){
                if(res.code==1234){
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
