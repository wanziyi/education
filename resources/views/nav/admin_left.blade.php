<aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- Sidebar user panel -->
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="/admin/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                    </div>
                    <div class="pull-left info">
                        <p> 用户</p>
                        <a href="#"><i class="fa fa-circle text-success"></i> 在线</a>
                    </div>
                </div>
              
                <!-- /.search form -->


                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu"  >
                    <li class="header">菜单</li>
                    <li id="admin-index"><a href="{{url('admin/index')}}"><i class="fa fa-dashboard"></i> <span>首页</span></a></li>

				    <!-- 菜单 -->
				    <li class="treeview">
				        <a href="#">
				            <i class="fa fa-folder"></i> 
				            <span>课程管理</span>
				            <span class="pull-right-container">
				       			<i class="fa fa-angle-left pull-right"></i>
				   		 	</span>
				        </a>
				        <ul class="treeview-menu">
				
				            <li id="admin-login">
				                <a href="{{url('course/course_add')}}" target="iframe">
				                    <i class="fa fa-circle-o"></i>课程添加
				                </a>
				            </li>
							<li id="admin-login">
				                <a href="{{url('course/course_list')}}" target="iframe">
				                    <i class="fa fa-circle-o"></i>课程展示
				                </a>
				            </li>
				        </ul>                        
				    </li>
					<li class="treeview">
				        <a href="#">
				            <i class="fa fa-folder"></i> 
				            <span>资讯管理</span>
				            <span class="pull-right-container">
				       			<i class="fa fa-angle-left pull-right"></i>
				   		 	</span>
				        </a>
				        <ul class="treeview-menu">
				
				            <li id="admin-login">
				                <a href="{{url('info/info_add')}}" target="iframe">
				                    <i class="fa fa-circle-o"></i>资讯添加
				                </a>
				            </li>
							<li id="admin-login">
				                <a href="{{url('info/info_list')}}" target="iframe">
				                    <i class="fa fa-circle-o"></i>资讯展示
				                </a>
				            </li>							
							
				        </ul>                        
				    </li>
					
					<li class="treeview">
				        <a href="#">
				            <i class="fa fa-folder"></i> 
				            <span>讲师管理</span>
				            <span class="pull-right-container">
				       			<i class="fa fa-angle-left pull-right"></i>
				   		 	</span>
				        </a>
				        <ul class="treeview-menu">
				
				            <li id="admin-login">
				                <a href="{{url('/personal/personal_add')}}" target="iframe">
				                    <i class="fa fa-circle-o"></i>讲师添加
				                </a>
				            </li>
							<li id="admin-login">
				                <a href="{{url('/personal/personal_list')}}" target="iframe">
				                    <i class="fa fa-circle-o"></i>讲师展示
				                </a>
				            </li>
				        </ul>                        
				    </li>
					<li class="treeview">
				        <a href="#">
				            <i class="fa fa-folder"></i> 
				            <span>题库模块</span>
				            <span class="pull-right-container">
				       			<i class="fa fa-angle-left pull-right"></i>
				   		 	</span>
				        </a>
				        <ul class="treeview-menu">
				
				            <li id="admin-login">
				                <a href="{{url('/question/question_add')}}" target="iframe">
				                    <i class="fa fa-circle-o"></i>题库添加
				                </a>
				            </li>
							<li id="admin-login">
				                <a href="{{url('/question/question_list')}}" target="iframe">
				                    <i class="fa fa-circle-o"></i>题库展示
				                </a>
				            </li>
				        </ul>                        
				    </li>
					<li class="treeview">
				        <a href="#">
				            <i class="fa fa-folder"></i> 
				            <span>用户信息</span>
				            <span class="pull-right-container">
				       			<i class="fa fa-angle-left pull-right"></i>
				   		 	</span>
				        </a>
				        <ul class="treeview-menu">
				
				            <li id="admin-login">
				                <a href="{{url('/admin/mycourse')}}" target="iframe">
				                    <i class="fa fa-circle-o"></i>信息展示
				                </a>
				            </li>
				        </ul>
					</li>
					<li class="treeview">
						<a href="#">
							<i class="fa fa-folder"></i>
							<span>权限管理</span>
							<span class="pull-right-container">
				       			<i class="fa fa-angle-left pull-right"></i>
				   		 	</span>
						</a>
						<ul class="treeview-menu">

							<li id="admin-login">
				                <a href="{{url('/answer/answer_list')}}" target="iframe">
				                    <i class="fa fa-circle-o"></i>问答展示
				                </a>
				            </li>
				        </ul>                        
				    </li>
				    <li class="treeview">
				        <a href="#">
				            <i class="fa fa-folder"></i> 
				            <span>友情链接管理</span>
				            <span class="pull-right-container">
				       			<i class="fa fa-angle-left pull-right"></i>
				   		 	</span>
				        </a>
				        <ul class="treeview-menu">
				
				            <li id="admin-login">
				                <a href="{{url('/links/links_add')}}" target="iframe">
				                    <i class="fa fa-circle-o"></i>友情链接添加
				                </a>
				            </li>
							<li id="admin-login">
				                <a href="{{url('/links/links_list')}}" target="iframe">
				                    <i class="fa fa-circle-o"></i>友情链接展示
				                </a>
				            </li>
				        </ul>                        
				    </li>
				     <li class="treeview">
				        <a href="#">
				            <i class="fa fa-folder"></i> 
				            <span>课程分类</span>
				            <span class="pull-right-container">
				       			<i class="fa fa-angle-left pull-right"></i>
				   		 	</span>
				        </a>
				        <ul class="treeview-menu">
				
				            <li id="admin-login">
				                <a href="{{url('/category/cate_add')}}" target="iframe">
				                    <i class="fa fa-circle-o"></i>课程分类添加
				                </a>
				            </li>
							<li id="admin-login">
				                <a href="{{url('/category/cate_list')}}" target="iframe">
				                    <i class="fa fa-circle-o"></i>课程分类展示
				                </a>
				            </li>
				        </ul>                        
				    </li>
				    <li class="treeview">
				        <a href="#">
				            <i class="fa fa-folder"></i> 
				            <span>课程目录管理</span>
				            <span class="pull-right-container">
				       			<i class="fa fa-angle-left pull-right"></i>
				   		 	</span>
				        </a>
				        <ul class="treeview-menu">
				
				            <li id="admin-login">
				                <a href="{{url('catagory/cata_add')}}" target="iframe">
				                    <i class="fa fa-circle-o"></i>课程目录添加
				                </a>
				            </li>
							<li id="admin-login">
				                <a href="{{url('catagory/cata_list')}}" target="iframe">
				                    <i class="fa fa-circle-o"></i>课程目录展示
				                </a>
				            </li>
				        </ul>                        
				    </li>
				    <li class="treeview">
				        <a href="#">
				            <i class="fa fa-folder"></i> 
				            <span>课程资料管理</span>
				            <span class="pull-right-container">
				       			<i class="fa fa-angle-left pull-right"></i>
				   		 	</span>
				        </a>
				        <ul class="treeview-menu">
				
				            <li id="admin-login">
				                <a href="{{url('cd/cd_add')}}" target="iframe">
				                    <i class="fa fa-circle-o"></i>课程资料添加
				                </a>
				            </li>
							<li id="admin-login">
				                <a href="{{url('cd/cd_list')}}" target="iframe">
				                    <i class="fa fa-circle-o"></i>课程资料展示
				                </a>
				            </li>
				        </ul>                        
				    </li>
				    <li class="treeview">
				        <a href="#">
				            <i class="fa fa-folder"></i> 
				            <span>角色管理</span>
				            <span class="pull-right-container">
				       			<i class="fa fa-angle-left pull-right"></i>
				   		 	</span>
				        </a>
				        <ul class="treeview-menu">
				
				            <li id="admin-login">
				                <a href="{{url('role/role_add')}}" target="iframe">
				                    <i class="fa fa-circle-o"></i>角色添加
				                </a>
				            </li>
							<li id="admin-login">
				                <a href="{{url('role/role_list')}}" target="iframe">
				                    <i class="fa fa-circle-o"></i>角色展示
				                </a>
				            </li>
				        </ul>                        
				    </li>
				    <li class="treeview">
				        <a href="#">
				            <i class="fa fa-folder"></i> 
				            <span>权限管理</span>
				            <span class="pull-right-container">
				       			<i class="fa fa-angle-left pull-right"></i>
				   		 	</span>
				        </a>
				        <ul class="treeview-menu">
				
				            <li id="admin-login">
				                <a href="{{url('/rbac/priv')}}" target="iframe">
				                    <i class="fa fa-circle-o"></i>权限添加
				                </a>
				            </li>
							<li id="admin-login">
				                <a href="{{url('/rbac/priv_list')}}" target="iframe">
				                    <i class="fa fa-circle-o"></i>权限展示
				                </a>
				            </li>
				        </ul>                        
				    </li>
				    <li class="treeview">
				        <a href="#">
				            <i class="fa fa-folder"></i> 
				            <span>用户管理</span>
				            <span class="pull-right-container">
				       			<i class="fa fa-angle-left pull-right"></i>
				   		 	</span>
				        </a>
				        <ul class="treeview-menu">
				
				            <li id="admin-login">
				                <a href="{{url('/user/user_add')}}" target="iframe">
				                    <i class="fa fa-circle-o"></i>用户添加
				                </a>
				            </li>
							<li id="admin-login">
				                <a href="{{url('/user/user_list')}}" target="iframe">
				                    <i class="fa fa-circle-o"></i>用户展示
				                </a>
				            </li>
				        </ul>                        
				    </li>
				   
				    <!-- 菜单 /-->

                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>