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
<script type="text/javascript">
$(function(){

	$('.demo2').Tabs({
		event:'click'
	});
	$('.demo3').Tabs({
		event:'click'
	});
});
</script>
</head>

<body>

@include("nav.top")

<?php 
echo "<center><h1>题库内容</h1></center>";
?>
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
