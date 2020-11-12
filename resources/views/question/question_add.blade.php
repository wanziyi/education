
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
            <h3 class="box-title">题库管理</h3>
        </div>

        <div class="box-body">

            <!-- 数据表格 -->
            <div class="table-box">

                <!--工具栏-->
                <div class="pull-left">
                    <div class="form-group form-inline">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default" title="单选新建" data-toggle="modal" data-target="#editModal" ><i class="fa fa-file-o"></i> 新建</button>
                            <button type="button" class="btn btn-default" title="删除"><i class="fa fa-trash-o"></i> 删除</button>

                            <button type="button" class="btn btn-default" title="刷新" onclick="window.location.reload();"><i class="fa fa-refresh"></i> 刷新</button>
                        </div>
                    </div>
                </div>

                <form>
                <div class="box-tools pull-right">
                    <div class="has-feedback">
                        出题内容：<input type="text" name="question_name">
                        <input type="submit" value="搜索">
                    </div>
                </div>
                </form>
                
                <!--工具栏/-->
                <!--数据列表-->
                <table id="dataList" class="table table-bordered table-striped table-hover dataTable">
                    <thead>
                    <tr>
                        <th class="" style="padding-right:0px">
                            <input id="selall" type="checkbox" class="icheckbox_square-blue">
                        </th>
                        <th class="sorting_asc">题库id</th>
                        <th class="sorting">出题内容</th>
                        <th class="sorting">问题答案</th>
                        <th class="sorting">正确答案</th>
                        <th class="sorting">题库类型</th>
                        <th class="sorting">出题时间</th>
                        <th class="sorting">题目分值</th>
                        <th class="sorting">问题类型</th>
                        <th class="sorting">题库编号</th>
                        <th class="sorting">出题讲师</th>
                        <th class="text-center">操作</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($res as $v)
                    <tr question_id="{{$v->question_id}}">
                        <th class="" style="padding-right:0px">
                            <input id="selall" type="checkbox" class="icheckbox_square-blue">
                        </th>
                        <td>{{$v->question_id}}</td>
                        <td>{{$v->question_name}}</td>
                        <td>{{$v->question_contents}}</td>
                        <td>{{$v->question_yescten}}</td>
                        <td>{{$v->question_ttype}}</td>
                        <td>{{date("Y-m-d H:i:s"),$v->question_time}}</td> 
                        <td>{{$v->question_score}}</td>
                        <td>{{$v->question_type}}</td>
                        <td>{{$v->question_bian}}</td>
                        <td>{{$v->per_name}}</td>
                        <td class="text-center">
                            <button type="button"  id="del">删除</button>
                            <button type="button" id="but" class="btn btn-info"><a href="{{url('/question/question_upd?question_id='.$v->question_id)}}">修改</a></button>

                        </td>
                    </tr>
                    @endforeach

                    </tbody>

                </table>
                <!--数据列表/-->
{{$res->links()}}


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
                        <h3 id="myModalLabel">题库 简答题添加</h3>
                    </div>
                    <div class="modal-body">
                        <form  id="fileForm" >

                        <table class="table table-bordered table-striped"  width="800px">
                            <tr>
                                <td>出题内容</td>
                                <td><input type="text" class="form-control" placeholder="" name="question_name" id="question_name"></td>
                            </tr>

                            

                            <tr>
                                <td>问题答案</td>
                                <td>
                                    <input type="text" class="form-control" placeholder="" name="question_contents" id="question_contents">
                                </td>
                            </tr>
                            <tr>
                                <td>正确答案</td>
                                <td>
                                    <input type="text" class="form-control" placeholder="" name="question_yescten" id="question_yescten">
                                </td>
                            </tr>

                            <tr>
                                <td>题库类型</td>
                                <td>
                                    <input type="radio"  name="question_ttype" value="PHP" checked id="question_ttype">PHP
                                    <input type="radio"  name="question_ttype" value="JAVA" id="question_ttype">JAVA
                                    <input type="radio"  name="question_ttype" value="C++" id="question_ttype">C++
                                    <input type="radio"  name="question_ttype" value="Pythsn" id="question_ttype">Pythsn
                                </td>
                            </tr>

                            <tr>
                                <td>题目分值</td>
                                <td>
                                    <input type="text" class="form-control" placeholder="" name="question_score" id="question_score">
                                </td>
                            </tr>

                            <tr>
                                <td>问题类型</td>
                                <td>
                                    <select name="question_type" id="question_type">
                                        <option value="">--请选择--</option>
                                        <option value="单选题">单选题</option>
                                        <option value="多选题">多选题</option>
                                        <option value="简答题">简答题</option>
                                    </select>
                                </td>
                            </tr>

                            <tr>
                                <td>题库编号</td>
                                <td><input type="text" class="form-control" placeholder="" name="question_bian" id="question_bian"></td>
                            </tr>

                            <tr>
                                <td>讲师</td>
                                <td>
                                    <select name="per_id" id="per_id">
                                        <option value="">--请选择--</option>
                                        @foreach($per as $v)
                                        <option value="{{$v->per_id}}">{{$v->per_name}}</option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                        </table>
                        </form>
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
$(document).on("click","#button",function(){
        var question_name=$("#question_name").val();
        var question_contents=$("#question_contents").val();
        var question_yescten=$("#question_yescten").val();
        var question_ttype=$("#question_ttype:checked").val();
        var question_score=$("#question_score").val();
        var question_type=$("#question_type").val();
        var question_bian=$("#question_bian").val();
        var per_id=$("#per_id").val();
        // alert(question_ttype);
        
        // alert(notice_content);
        $.ajax({
            url:'/question/question_add',
            dataType:'json',
            type:'POST',
            async:false,
            data:{question_name:question_name,question_contents:question_contents,question_yescten:question_yescten,question_ttype:question_ttype,question_score:question_score,question_type:question_type,question_bian:question_bian,per_id:per_id},
            success:function(res){
                if(res.code=="1111"){
                    // alert(res.msg)
                    window.location.href=res.url;
                }else{
                    window.location.href=res.url;
                }
            }
        })
    })
$(document).on("click","#del",function(){

        var question_id=$(this).parents("tr").attr("question_id");
        // alert(question_id);
    $.ajax({
        url:"/question/question_del",
        data:{question_id:question_id},
        type:"post",
        dataType:"json",
        success:function(res){
            if(res.code=="11111"){
                // alert(res.msg);
                window.location.href=res.url;
            }else{
                alert(res.msg);
            }
        }
    })
})
</script>