<aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- Sidebar user panel -->
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="/admin/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                    </div>
                    <div class="pull-left info">
                        <p> 测试用户</p>
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
				                <a href="{{url('/question/question_list')}}" target="iframe">
				                    <i class="fa fa-circle-o"></i>题库管理/简答题添加
				                </a>
				            </li>
				            <li id="admin-login">
				                <a href="{{url('/singcho/singcho_list')}}" target="iframe">
				                    <i class="fa fa-circle-o"></i>单选题添加
				                </a>
				            </li>
							<li id="admin-login">
				                <a href="{{url('/mucho/mucho_list')}}" target="iframe">
				                    <i class="fa fa-circle-o"></i>多选题添加
				                </a>
				            </li>
				        </ul>                        
				    </li>
					<li class="treeview">
				        <a href="#">
				            <i class="fa fa-folder"></i> 
				            <span>问答管理</span>
				            <span class="pull-right-container">
				       			<i class="fa fa-angle-left pull-right"></i>
				   		 	</span>
				        </a>
				        <ul class="treeview-menu">
				
				            <li id="admin-login">
				                <a href="{{url('/answer/answer_add')}}" target="iframe">
				                    <i class="fa fa-circle-o"></i>问答添加
				                </a>
				            </li>
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
				            <span>考试管理</span>
				            <span class="pull-right-container">
				       			<i class="fa fa-angle-left pull-right"></i>
				   		 	</span>
				        </a>
				        <ul class="treeview-menu">
				            <li id="admin-login">
				                <a href="{{url('/exam/exam_list')}}" target="iframe">
				                    <i class="fa fa-circle-o"></i>考试展示
				                </a>
				            </li>
				        </ul>                        
				    </li>
				    <li class="treeview">
				        <a href="#">
				            <i class="fa fa-folder"></i> 
				            <span>公告管理</span>
				            <span class="pull-right-container">
				       			<i class="fa fa-angle-left pull-right"></i>
				   		 	</span>
				        </a>
				        <ul class="treeview-menu">
				            <li id="admin-login">
				                <a href="{{url('/notice/notice_list')}}" target="iframe">
				                    <i class="fa fa-circle-o"></i>公告展示
				                </a>
				            </li>
				        </ul>                        
				    </li>
				    <!-- 菜单 /-->

                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>