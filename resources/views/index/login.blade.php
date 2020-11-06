
<!doctype html>
<html><!-- InstanceBegin template="/Templates/dwt.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta charset="utf-8">
<!-- InstanceBeginEditable name="doctitle" -->
<title>谋刻职业教育在线测评与学习平台</title>

<link rel="stylesheet" href="/css/course.css"/>
<link rel="stylesheet" href="/css/register-login.css"/>
<script src="/js/jquery-1.8.0.min.js"></script>
<link rel="stylesheet" href="/css/tab.css" media="screen">
<script src="/js/jquery.tabs.js"></script>
<script src="/js/mine.js"></script>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->

</head>

<body>

@include("nav.top")
<!-- InstanceBeginEditable name="EditRegion1" -->
<div class="login" style="background:url(/images/12.jpg) right center no-repeat #fff">
<h2>登录</h2>
<form style="width:600px">
<div>
    <p class="formrow">
    <label class="control-label" for="register_email">帐号</label>
    <input type="text">
    </p>
    <span class="text-danger">请输入Email地址 / 用户昵称</span>
</div>
<div>
    <p class="formrow">
    <label class="control-label" for="register_email">密码</label>
    <input type="password">
    </p>
    <p class="help-block"><span class="text-danger">密码错误</span></p>
</div>
<div class="loginbtn">
	<label><input type="checkbox"  checked="checked"> <span class="jzmm">记住密码</span> </label>&nbsp;&nbsp;
    <button type="submit" class="uploadbtn ub1">登录</button>
    
</div>
<div class="loginbtn lb">
   <a href="{{url('index/reg')}}" class="link-muted">还没有账号？立即免费注册</a>
   <span>&nbsp;&nbsp;|&nbsp;&nbsp;</span>   
   <a href="{{url('index/forgetpassword')}}" class="link-muted">找回密码</a>
</div>
</form>
<div class="hezuologo">
    <span class="hezuo">使用合作网站账号登录</span>
    <div class="hezuoimg">
    <img src="/images/hezuoqq.png" class="hzqq" title="QQ" width="40" height="40"/>
    <img src="/images/hezuowb.png" class="hzwb" title="微博" width="40" height="40"/>
    </div>
    
  </div>
</div>
<!-- InstanceEndEditable -->


<div class="clearh"></div>
@include("nav.foot")
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
