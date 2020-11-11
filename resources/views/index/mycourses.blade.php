
<!doctype html>
<html><!-- InstanceBegin template="/Templates/dwt.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
    <meta charset="utf-8">
    <!-- InstanceBeginEditable name="doctitle" -->
    <title>谋刻职业教育在线测评与学习平台</title>
    <script src="/uploadess/jquery.js"></script>
    <link rel="stylesheet" href="/uploadess/uploadify.css">
    <script src="/uploadess/jquery.uploadify.js"></script>
    <link rel="stylesheet" href="/admin/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/admin/plugins/adminLTE/css/AdminLTE.css">
    <link rel="stylesheet" href="/admin/plugins/adminLTE/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="/admin/css/style.css">
    <script src="/admin/plugins/bootstrap/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="/css/course.css"/>
    <link rel="stylesheet" href="/css/member.css"/>
    <script src="/js/jquery-1.8.0.min.js"></script>
    <link rel="stylesheet" href="/css/tab.css" media="screen">
    <script src="/js/jquery.tabs.js"></script>
    <script src="/js/mine.js"></script>
    <script type="text/javascript">
        $(function(){


            $('.demo2').Tabs({
                event:'click'
            });



        });
    </script>
    <!-- InstanceEndEditable -->
    <!-- InstanceBeginEditable name="head" -->
    <!-- InstanceEndEditable -->

</head>

<body>

<div class="head" id="fixed">
    <div class="nav">
        <span class="navimg"><a href="{{url('index/index')}}"><img border="0" src="/images/logo.png"></a></span>
        <ul class="nag">
            <li><a href="{{url('index/course')}}" class="link1 current">课程</a></li>
            <li><a href="{{url('index/article')}}" class="link1">资讯</a></li>
            <li><a href="{{url('index/teacher')}}" class="link1">讲师</a></li>
            <li><a href="exam_index.html" class="link1" target="_blank">题库</a></li>
            <li><a href="askarea.html" class="link1" target="_blank">问答</a></li>

        </ul>
        <span class="massage">
            <!--<span class="select">
        	<a href="#" class="sort">课程</a>
        	<input type="text" value="关键字"/>
            <a href="#" class="sellink"></a>
            <span class="sortext">
            	<p>课程</p>
                <p>题库</p>
                <p>讲师</p>
            </span>
        </span>-->
            <!--未登录-->
        	<span class="exambtn_lore">
                 <a class="tkbtn tklog" href="{{url('index/login')}}">登录</a>
                 <a class="tkbtn tkreg" href="{{url('index/reg')}}">注册</a>
            </span>
            <!--登录后-->
            <!--<div class="logined">
                <a href="mycourse.html"  onMouseOver="logmine()" style="width:70px" class="link2 he ico" target="_blank">sherley</a>
                <span id="lne" style="display:none" onMouseOut="logclose()" onMouseOver="logmine()">
                    <span style="background:#fff;">
                        <a href="mycourse.html" style="width:70px; display:block;" class="link2 he ico" target="_blank">sherley</a>
                    </span>
                    <div class="clearh"></div>
                    <ul class="logmine" >
                        <li><a class="link1" href="#">我的课程</a></li>
                        <li><a class="link1" href="#">我的题库</a></li>
                        <li><a class="link1" href="#">我的问答</a></li>
                        <li><a class="link1" href="#">退出</a></li>
                    </ul>
                </span>
            </div>-->

        </span>
    </div>
</div>
<!-- InstanceBeginEditable name="EditRegion1" -->
<div class="clearh"></div>
<div class="membertab">
    <div class="memblist">
        <div class="membhead">
            <div style="text-align:center;"><img src="/images/0-0.JPG" width="80" ></div>
            <div style="width:220px;text-align:center;">
                <p class="membUpdate mine">某某某</p>
                <p class="membUpdate mine"><a href="{{url('index/mycourses')}}">修改信息</a>&nbsp;|&nbsp;<a href="{{url('index/myrepassword')}}">修改密码</a></p>
                <div class="clearh"></div>
            </div>
        </div>
        <div class="memb">

            <ul>
                <li class="currnav"><a class="mb1" href="{{url('index/mycourse')}}">我的课程</a></li>
                <li><a class="mb3" href="myask.html">我的问答</a></li>
                <li><a class="mb4" href="mynote.html">我的笔记</a></li>
                <li><a class="mb12" href="myhomework.html">我的作业</a></li>
                <li><a class="mb2" href="training_list.html" target="_blank">我的题库</a></li>
            </ul>

        </div>


    </div>


    <div class="membcont">
        <h3 class="mem-h3">个人信息中心</h3>

        <form role="form">
            <div class="form-group">
                <label for="name">昵称</label>
                <input type="text" class="form-control" placeholder="昵称输入">
            </div>
            <div class="form-group">
                <label for="name">头像</label>
                <input type="file" class="form-control" id="uploadify"  name="per_img" placeholder="商品图片">
                <div class="showimg"></div>
            </div>
            <div class="form-group">
                <label for="name">个人介绍</label>
                <textarea name="" id="" cols="15" rows="5" placeholder="个人介绍"></textarea>
            </div>
            <div class="form-group">
                <label for="name">年龄</label>
                <input type="text" class="form-control" placeholder="年龄">
            </div><div class="form-group">
                <label for="name">性别</label>
                <input type="radio"  value="1">男
                <input type="radio"  value="2">女
            </div>
            <div class="form-group">
                <label for="name">联系方式</label>
                <input type="text" class="form-control" placeholder="手机号或电话">
            </div>

        </form>
        <div class="modal-footer">
            <button class="btn btn-success" data-dismiss="modal" aria-hidden="true" id="but">保存个人信息</button>
        </div>
    <div class="clearh"></div>
</div>

<!-- InstanceEndEditable -->


<div class="clearh"></div>
<div class="foot">
    <div class="fcontainer">
        <div class="fwxwb">
            <div class="fwxwb_1">
                <span>关注微信</span><img width="95" alt="" src="/images/num.png">
            </div>
            <div>
                <span>关注微博</span><img width="95" alt="" src="/images/wb.png">
            </div>
        </div>
        <div class="fmenu">
            <p><a href="#">关于我们</a> | <a href="#">联系我们</a> | <a href="#">优秀讲师</a> | <a href="#">帮助中心</a> | <a href="#">意见反馈</a> | <a href="#">加入我们</a></p>
        </div>
        <div class="copyright">
            <div><a href="/">谋刻网</a>所有&nbsp;晋ICP备12006957号-9</div>
        </div>
    </div>
</div>
<!--右侧浮动-->
<div class="rmbar">
	<span class="barico qq" style="position:relative">
	<div  class="showqq">
	   <p>官方客服QQ:<br>335049335</p>
	</div>
	</span>
    <span class="barico em" style="position:relative">
	  <img src="/images/num.png" width="75" class="showem">
	</span>
    <span class="barico wb" style="position:relative">
	  <img src="/images/wb.png" width="75" class="showwb">
	</span>
    <span class="barico top" id="top">置顶</span>
</div>
</body>

<!-- InstanceEnd --></html>
<script>
    $(document).ready(function(){
        $("#uploadify").uploadify({
            uploader: "/index/upload",
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
