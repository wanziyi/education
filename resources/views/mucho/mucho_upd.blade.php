
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
        {{--<iframe width="100%" id="iframe" name="iframe"  onload="SetIFrameHeight()" frameborder="0" src="home.html">--}}

{{--//======================================================================================================================--}}

  <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"> 
    <title>Bootstrap 实例 - 水平表单</title>
    <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">  
    <script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
                                <input type="hidden" value="{{$data['question_id']}}" id="question_id">

                        <table class="table table-bordered table-striped"  width="800px">
                            <tr>
                                <td>出题内容</td>
                                <td><input type="text" class="form-control" value="{{$data['question_name']}}" name="question_name" id="question_name"></td>
                            </tr>

                            

                            <!-- <tr>
                                <td>单选题答案</td>
                                <td>
                                    @foreach($data["a"] as $v)
                                    <input  id="question_contents" value="{{$v}}" style="background:#acffff;border:1px solid #ffffff">
                                    @endforeach
                                    <br>
                                </td>
                            </tr> -->

                            <tr>
                                <td>单选题答案</td>
                                <td>
                                    <input  id="question_contents" value="{{$data['a'][0]}}" style="background:#acffff;border:1px solid #ffffff">
                                    <input  id="question_contentss" value="{{$data['a'][1]}}" style="background:#acffff;border:1px solid #ffffff">
                                    <input  id="question_contentsss" value="{{$data['a'][2]}}" style="background:#acffff;border:1px solid #ffffff">
                                    <input  id="question_contentssss" value="{{$data['a'][3]}}" style="background:#acffff;border:1px solid #ffffff">
                                    <br>
                                </td>
                            </tr>

                            <tr>
                                <td>正确答案</td>
                                <td>
                                    <input type="text" class="form-control" placeholder="" value="{{$data['question_yescten']}}" name="question_yescten" id="question_yescten">
                                </td>
                            </tr>

                            <tr>
                                <td>题库类型</td>
                                <td>
                                    <input type="radio"  name="question_ttype" @if($data['question_ttype']=="PHP") checked @endif value="PHP" id="question_ttype">PHP
                                    <input type="radio"  name="question_ttype" @if($data['question_ttype']=="JAVA") checked @endif value="JAVA" id="question_ttype">JAVA
                                    <input type="radio"  name="question_ttype" @if($data['question_ttype']=="C++") checked @endif value="C++" id="question_ttype">C++
                                    <input type="radio"  name="question_ttype" @if($data['question_ttype']=="Pythsn") checked @endif value="Pythsn" id="question_ttype">Pythsn
                                </td>
                            </tr>

                            <tr>
                                <td>题目分值</td>
                                <td>
                                    <input type="text" class="form-control" placeholder="" value="{{$data['question_score']}}" name="question_score" id="question_score">
                                </td>
                            </tr>

                            <tr>
                                <td>问题类型</td>
                                <td>
                                    <select name="question_type" id="question_type">
                                        <option value="">--请选择--</option>
                                        <option value="单选题" @if($data['question_type']=="单选题") selected @endif>单选题</option>
                                        <option value="多选题" @if($data['question_type']=="多选题") selected @endif >多选题</option>
                                        <option value="简答题" @if($data['question_type']=="简答题") selected @endif>简答题</option>
                                    </select>
                                </td>
                            </tr>

                            <tr>
                                <td>题库编号</td>
                                <td><input type="text" class="form-control" value="{{$data['question_bian']}}" placeholder="" name="question_bian" id="question_bian"></td>
                            </tr>
                            <tr>
                                <td>讲师</td>
                                <td>
                                    <select name="per_id" id="per_id">
                                        <option value="">--请选择--</option>
                                        @foreach($per as $v)
                                        <option value="{{$v->per_id}}" @if($data['per_id']==$v->per_id) selected @endif>{{$v->per_name}}</option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                        </table>
                        <div class="modal-footer">
                        <button class="btn btn-success" type="button" data-dismiss="modal" aria-hidden="true" id="upd">修改</button>
                    </div>
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
    $(document).on("click","#upd",function(){
        var question_name=$("#question_name").val();
        var question_contents=$("#question_contents").val();
        var question_contentss=$("#question_contentss").val();
        var question_contentsss=$("#question_contentsss").val();
        var question_contentssss=$("#question_contentssss").val();
        var question_yescten=$("#question_yescten").val();
        var question_ttype=$("#question_ttype:checked").val();
        var question_score=$("#question_score").val();
        var question_type=$("#question_type").val();
        var question_bian=$("#question_bian").val();
        var question_id = $("#question_id").val();
        var per_id=$("#per_id").val();
        $.ajax({
            url:'/mucho/mucho_upd_do',
            dataType:'json',
            type:'POST',
            data:{question_id:question_id,question_contentssss:question_contentssss,question_contentsss:question_contentsss,question_contentss:question_contentss,question_name:question_name,question_contents:question_contents,question_yescten:question_yescten,question_ttype:question_ttype,question_score:question_score,question_type:question_type,question_bian:question_bian,per_id:per_id},
            success:function(res){
               if(res.code==55555){
                    location.href=res.url
               }else{
                    location.href=res.url
               }
            }
        })
    })
</script>
