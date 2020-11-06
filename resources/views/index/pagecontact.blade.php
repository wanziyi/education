
<!doctype html>
<html><!-- InstanceBegin template="/Templates/dwt.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta charset="utf-8">
<!-- InstanceBeginEditable name="doctitle" -->
<title>谋刻职业教育在线测评与学习平台</title>
<link rel="stylesheet" href="/css/course.css"/>
<link rel="stylesheet" href="/css/tab.css" media="screen">
<script src="/js/jquery-1.8.0.min.js"></script>
<script src="/js/jquery.tabs.js"></script>
<script src="/js/mine.js"></script>
<script>
$(function(){
	/*左侧栏*/
    var w = $(window).width();
    var lw = (w - 1100) / 2 - 10;
    $(".courseleft").css({
        "position": "fixed",
        "top": "80px",
        "left": lw + 10
    });
});

</script>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->

</head>

<body>

@include("nav.top")
<!-- InstanceBeginEditable name="EditRegion1" -->
<div class="coursecont">
    <div class="courseleft">
    <ul class="courseul pageul">
        <li style="border-radius:3px 3px 0 0"><a href="{{url('index/pagecontact')}}">关于我们<b></b></a></li>
        <li class="curr"><a href="{{url('index/pagecontact')}}" >联系我们<b></b></a></li>
        <li><a href="{{url('index/pagecontact')}}" >帮助中心<b></b></a></li>
        <li><a href="{{url('index/pagecontact')}}" >意见反馈<b></b></a></li>
        <li style="border-radius:0 0 3px 3px "><a href="{{url('index/pagecontact')}}" >加入我们<b></b></a></li>
    </ul>
    </div>
    <div class="courseright pageright" style="min-height:500px;">
    	<h3 class="mem-h3">联系我们</h3>
        <div class="clearh"></div>
   	  	<div class="pagetext">
	    	<span class="pagemap">
            	<img src="/images/map.jpg" width="400"> 
            </span>
            <span class="contact">
            	<p><strong>咨询热线</strong>：400-803-5080</p>
                <p><strong>客服QQ</strong>：2977138424</p>
                <p><strong>公司地址</strong>：山西省太原市高新开发区体育路南内环街口数码港A座4层</p>
            </span>
        </div>
    </div>
    <div class="clearh"></div>
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
