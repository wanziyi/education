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
<!-- 页面头部 -->
@include("nav.admin_top")
<!-- 导航侧栏 -->
@include("nav.admin_left")
<!-- 内容区域 -->
<div class="content-wrapper">
    <!-- 正文区域 -->
    <div class="box-header with-border">
        <h1 class="box-title">角色权限管理</h1>
    </div>
    <section class="content">
        <div class="box-body">
            <div class="nav-tabs-custom">
                <div class="tab-content">
                    <div class="tab-pane active" id="home">
                        <div class="row data-type">
                            <div class="col-md-2 title">角色名称</div>
                            <div class="col-md-10 data">
                                <select id="role_id" class="form-control">
                                    @foreach($role_data as $k=>$v)
                                    <option value="{{$v->role_id}}">{{$v->role_name}}</option>
                                        @endforeach
                                </select>
                            </div>
                            <div class="col-md-2 title">权限名称</div>
                            <div class="col-md-10 data">
                                @foreach($priv_data as $k=>$v)
                                <input type="checkbox" id="priv_id" value="{{$v->priv_id}}">
                                    {{$v->priv_name}}
                                    @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="btn-toolbar list-toolbar">
            <button class="btn btn-primary" id="add"><i class="fa fa-save"></i>添加</button>
        </div>
    </section>
    <!-- 正文区域 /-->
    <!-- 底部导航 -->
</div>
</body>
@include("nav.admin_foot")
</html>
<script>
    $(document).on("click","#add",function(){
        var role_id = $("select[id='role_id']").val();

        var check =[];
        $("input[type='checkbox']:checked").each(function(){
            check.push($(this).val());
        });
        $.ajax({
            url:"{{url('/rbac/role_privDo')}}",
            type:'POST',
            data:{role_id:role_id,priv_id:check},
            dataType:'json',
            success:function(res){
                // alert(111);
                if(res.code=='0'){
                    alert(res.mag)
                    location.href='/rbac/role_priv_list'
                }
            }
        })
    })
</script>