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
    <h1 class="box-title">角色添加</h1>
</div>
<section class="content">
    <div class="box-body">
        <div class="nav-tabs-custom">
            <div class="tab-content">
                <div class="tab-pane active" id="home">
                    <div class="row data-type">
                        <input type="hidden" name="cata_id" value="{{$data->cata_id}}">
                        <div class="col-md-2 title">目录名称</div>
                        <div class="col-md-10 data">
                            <input type="text" class="form-control"  placeholder="目录名称" name="cata_name" id="" value="{{$data->cata_name}}">
                        </div>
                        <div class="col-md-2 title">目录分类</div>
                        <div class="col-md-10 data">
                            <select name="cate_id" id="">
                                    @foreach($res as $k=>$v)
                                    <option value="{{$v->cate_id}}" {{$v->cate_id==$data['cata_id']?'selected':''}}><?php echo str_repeat('&nbsp;&nbsp;&nbsp;&nbsp;',$v['level']) ?>{{$v->cate_name}}</option>
                                    @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="btn-toolbar list-toolbar">
        <button class="btn btn-primary" id="button"><i class="fa fa-save"></i>修改</button>
    </div>
</section>
    <!-- 正文区域 /-->
    <!-- 底部导航 -->
</div>
</body>
@include("nav.admin_foot")
</html>
<script>
    $(document).on('click','#button',function(){
        // alert(111);
        var cata_id=$('input[name="cata_id"]').val();
        var cata_name=$('input[name="cata_name"]').val();
        var cate_id=$('select[name="cate_id"]').val();
        // console.log(cata_name);
        // console.log(cate_id);
        $.ajax({
            url:"/catagory/updatedo",
                data:{cate_id:cate_id,cata_name:cata_name,cata_id:cata_id},
                type:"post",
                dataType:"json",
                success:function(res){
                    // alert(111);
                    if(res.code=='0'){
                        alert(res.mag)
                        location.href='/catagory/cata_list'
                    }
                }
        })
    })
</script>
