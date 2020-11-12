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
<!-- 页面头部 -->
@include("nav.admin_top")
<!-- 导航侧栏 -->
@include("nav.admin_left")
<!-- 内容区域 -->
<div class="content-wrapper">
    <!-- 正文区域 -->
    <section class="content">
        <div class="box-body">
            <!--tab页-->
            <div class="nav-tabs-custom">
                <!--tab内容-->
                <div class="tab-content">
                    <!--表单内容-->
                    <input type="hidden" value="{{$res->per_id}}"  id="per_id">
                    <div class="tab-pane active" id="home">
                        <div class="row data-type">
                            <form  id="fileForm" >

                                <table class="table table-bordered table-striped"  width="800px">
                                    <tr>
                                        <td>讲师名称</td>
                                        <td><input  class="form-control" placeholder="讲师名称" value="{{$res->per_name}}" id="per_name"></td>
                                    </tr>

                                    <tr>
                                        <td>讲师简介</td>
                                        <td><textarea id="per_content" placeholder="讲师简介...">{{$res->per_content}}</textarea></td>
                                    </tr>
                                    <tr>
                                        <td>讲师图片</td>
                                        <td>
                                            <input type="file" class="form-control" id="uploadify"  name="per_img" placeholder="商品图片">
                                            <div class="showimg"></div>
                                        @if($res->per_img)<img src="{{env('.UPLOAD_URL')}}{{$res->per_img}}" width="50" height="50">@endif
                                    </tr>
                                    <tr>
                                        <td>讲师家庭住址</td>
                                        <td><input  class="form-control" placeholder="讲师家庭住址..."  value="{{$res->per_address}}" id="per_address">  </td>
                                    </tr>
                                    <tr>
                                        <td>讲师年龄</td>
                                        <td><input  class="form-control" placeholder="讲师年龄...."  value="{{$res->per_age}}" id="per_age">  </td>
                                    </tr>
                                    <tr>
                                        <td>讲师电话</td>
                                        <td><input  class="form-control" placeholder="讲师电话...." id="per_tel" value="{{$res->per_tel}}">  </td>
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
                                        <td><textarea id="per_style" placeholder="讲师授课风格...">{{$res->per_style}}</textarea></td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                    </div>
                    <!--tab内容/-->
                    <!--表单内容/-->
                </div>
            </div>
            <div class="btn-toolbar list-toolbar">
                <button class="btn btn-success" data-dismiss="modal" aria-hidden="true" id="but">修改讲师个人信息</button>
            </div>
        </div>
    </section>
    <!-- 正文区域 /-->
    <!-- 底部导航 -->
</div>
</body>
@include("nav.admin_foot")
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

    //传输数据至添加
    $(document).on("click","#but",function(){
        var per_id = $("#per_id").val();

        per_name = $("input[id='per_name']").val();
        per_content = $("textarea[id='per_content']").val();
        per_img = $(".showimg").text();
        per_address = $("input[id='per_address']").val();
        per_age = $("input[id='per_age']").val();
        per_tel = $("[id='per_tel']").val();
        cur_id = $("select[id='cur_id']").val();
        per_style = $("textarea[id='per_style']").val();
        $.ajax({
            url:"{{url('/personal/personal_upd_do')}}",
            type:'POST',
            data:{per_id:per_id,per_name:per_name,per_content:per_content,per_img:per_img,per_address:per_address,per_age:per_age,per_tel:per_tel,cur_id:cur_id,per_style:per_style},
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