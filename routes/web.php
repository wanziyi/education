<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// ========================================================前台====================================================================


Route::any("/index/index","Index\IndexController@index");//前台首页
Route::any("/index/course",'Index\IndexController@course');//前台课程
Route::any("/index/article",'Index\IndexController@article');//前台资讯
Route::any("/index/teacher",'Index\IndexController@teacher');//前台讲师
Route::any("/index/mycourse",'Index\IndexController@mycourse');//前台个人信息
Route::any("/index/upload",'Index\IndexController@upload');
Route::any("/index/mycourses",'Index\IndexController@mycourses');
Route::any("/index/login",'Index\IndexController@login');//前台登陆
Route::any("/index/reg",'Index\IndexController@reg');//前台注册
Route::any("index/coursefont",'Index\IndexController@coursefont');//前台课程详情
Route::any("index/coursefont1",'Index\IndexController@coursefont1');//前台课程加入学习
Route::any("index/video",'Index\IndexController@video');//前台视频展示
Route::any("index/pagecontact",'Index\IndexController@pagecontact');
Route::any("index/page",'Index\IndexController@page');
Route::any("index/question",'Index\IndexController@question');//前台题库模块
Route::any("index/askarea",'Index\IndexController@askarea');//前台问答模块





// ========================================================后台====================================================================
Route::any("/admin/login",'Admin\AdminController@login');//后台登录
Route::any("/admin/logindo",'Admin\AdminController@logindo');//后台登录
Route::any("/admin/logindel",'Admin\AdminController@logindel');//后台登录
Route::any("/admin/index",'Admin\AdminController@index');//后台首页
Route::any("/course/course_add",'Admin\CurController@course_add');//后台课程添加
Route::any("/course/store",'Admin\CurController@store');//后台课程展示
Route::any("/course/course_list",'Admin\CurController@course_list');//后台课程展示
Route::any("/course/del",'Admin\CurController@del');//后台课程删除
Route::any("/course/update/{id}",'Admin\CurController@update');//后台课程删除
Route::any("/course/updatedo",'Admin\CurController@updatedo');//后台课程删除


Route::any("/category/cate_add",'Admin\CategoryController@cate_add');//后台课程分类添加
Route::any("/category/store",'Admin\CategoryController@store');//后台课程执行添加
Route::any("/category/cate_list",'Admin\CategoryController@cate_list');//后台课程分类展示
Route::any("/category/del",'Admin\CategoryController@del');//后台课程分类删除




Route::any("/coursedata/coursedata_add",'Admin\CoursedataController@coursedata_add');//后台课程资料添加
Route::any("/coursedata/coursedata_list",'Admin\CoursedataController@coursedata_list');//后台课程资料展示
Route::any("/coursedata/coursedata_del",'Admin\CoursedataController@coursedata_del');//后台课程资料删除
Route::any("/coursedata/coursedata_upd/{cd_id}",'Admin\CoursedataController@coursedata_upd');//后台课程资料修改
Route::any("/coursedata/coursedata_upd_do",'Admin\CoursedataController@coursedata_upd_do');//后台课程资料修改执行

Route::any("/question/question_add",'Admin\AdminController@question_add');//后台题库添加
Route::any("/question/question_list",'Admin\AdminController@question_list');//后台题库展示
Route::any("/question/question_del",'Admin\AdminController@question_del');//后台题库删除
Route::any("/question/question_upd",'Admin\AdminController@question_upd');//后台题库修改
Route::any("/question/question_upd_do",'Admin\AdminController@question_upd_do');//后台题库修改执行

Route::any("/info/info_add",'Admin\InfoController@info_add');//后台资讯添加
Route::any("/info/info_list",'Admin\InfoController@info_list');//后台资讯展示
Route::any("/info/info_del",'Admin\InfoController@info_del');//后台资讯删除
Route::any("/info/info_upd/{info_id}",'Admin\InfoController@info_upd');//后台资讯修改
Route::any("/info/info_upd_do",'Admin\InfoController@info_upd_do');//后台资讯修改执行

Route::any("/infocate/infocate_add",'Admin\InfocateController@infocate_add');//后台资讯分类添加
Route::any("/infocate/infocate_list",'Admin\InfocateController@infocate_list');//后台资讯分类展示
Route::any("/infocate/infocate_del",'Admin\InfocateController@infocate_del');//后台资讯分类删除
Route::any("/infocate/infocate_upd/{cate_id}",'Admin\InfocateController@infocate_upd');//后台资讯分类修改
Route::any("/infocate/infocate_upd_do",'Admin\InfocateController@infocate_upd_do');//后台资讯分类修改执行

Route::any("/personal/personal_add",'Admin\AdminController@personal_add');//后台讲师添加
Route::any("/personal/personal_uploade",'Admin\AdminController@personal_uploade');//文件上传
Route::any("/personal/personal_Do",'Admin\AdminController@personal_Do');//添加执行
Route::any("/personal/upload",'Admin\AdminController@upload');
Route::any("/personal/personal_list",'Admin\AdminController@personal_list');//后台讲师展示
Route::any("/personal/personal_del",'Admin\AdminController@personal_del');//后台课程删除
Route::any("/personal/personal_up/{per_id}",'Admin\AdminController@personal_up');//后台课程修改
Route::any("/personal/personal_upd_do",'Admin\AdminController@personal_upd_do');//后台课程修改执行

Route::any('/answer/answer_store','Admin\AnswerController@answer_store');//
Route::any("/answer/answer_add",'Admin\AnswerController@answer_add');//后台问答添加
Route::any("/answer/answer_list",'Admin\AnswerController@answer_list');//后台问答展示
Route::any("/answer/answer_del",'Admin\AnswerController@answer_del');//后台课程删除
Route::any("/answer/answer_upd/{ans_id}",'Admin\AnswerController@answer_upd');//后台课程修改
Route::any("/answer/answer_upd_do",'Admin\AnswerController@answer_upd_do');//后台课程修改执行
Route::any("/answer/answer_create",'Admin\AnswerController@answer_create');//后台问题列表
Route::any("/answer/answer_show",'Admin\AnswerController@answer_show');//后台回答展示

Route::any("/note/note_add",'Admin\NoteController@note_add');//后台用户笔记添加
Route::any("/note/note_list",'Admin\NoteController@note_list');//后台用户笔记展示
Route::any("/note/note_del",'Admin\NoteController@note_del');//后台用户笔记删除
Route::any("/note/note_upd",'Admin\NoteController@note_upd');//后台用户笔记修改
Route::any("/task/task_add",'Admin\TaskController@task_add');//后台用户作业添加
Route::any("/task/task_list",'Admin\TaskController@task_list');//后台用户作业展示
Route::any("/task/task_upd",'Admin\TaskController@task_upd');//后台用户作业修改

Route::any("/exam/exam_add",'Admin\ExamController@exam_add');//后台考试添加
Route::any("/exam/exam_show",'Admin\ExamController@exam_show');//后台考试展示
Route::any("/exam/paper_show",'Admin\ExamController@paper_show');//后台考卷展示
Route::any("/exam/add",'Admin\ExamController@add');
Route::any("/exam/exam_upd/{exam_id}",'Admin\ExamController@exam_upd');//后台考试修改展示
Route::any("/exam/exam_upd_do",'Admin\ExamController@exam_upd_do');//后台考试修改执行
Route::any("/exam/exam_del",'Admin\ExamController@exam_del');//后台考试删除

Route::any("/rotation/rotation_add",'Admin\RotationController@rotation_add');//后奥体轮播图添加
Route::any("/rotation/rotation_show",'Admin\RotationController@rotation_show');//后台轮播图展示
Route::any("/rotation/add",'Admin\RotationController@add');//后台轮播图
Route::any("/rotation/rotation_del",'Admin\RotationController@rotation_del');//后台轮播图删除
Route::any("/rotation/rotation_upd/{rota_id}",'Admin\RotationController@rotation_upd');//后台轮播图修改展示
Route::any("/rotation/rotation_upd_do",'Admin\RotationController@rotation_upd_do');//后台轮播图修改执行
Route::any("/rotation/upload",'Admin\RotationController@upload');





Route::any("/links/links_add",'Admin\LinksController@links_add');//后台友情链接添加
Route::any("/links/links_list",'Admin\LinksController@links_list');//后台友情链接展示



Route::any("/catagory/cata_add",'Admin\CataController@cata_add');//后台课程目录添加
Route::any("/catagory/store",'Admin\CataController@store');//后台课程目录执行添加
Route::any("/catagory/cata_list",'Admin\CataController@cata_list');//后台课程目录展示
Route::any("/catagory/del",'Admin\CataController@del');//后台课程目录删除
Route::any("/catagory/update",'Admin\CataController@update');//后台课程目录修改

Route::any("/cd/cd_add",'Admin\CdController@cd_add');//后台课程资料添加
Route::any("/cd/store",'Admin\CdController@store');//后台课程资料执行添加
Route::any("/cd/cd_list",'Admin\CdController@cd_list');//后台课程资料展示
Route::any("/cd/del",'Admin\CdController@del');//后台课程资料删除
Route::any("/cd/update",'Admin\CdController@update');//后台课程资料修改



Route::any("/role/role_add",'Admin\RoleController@role_add');//后台角色添加
Route::any("/role/store",'Admin\RoleController@store');//后台角色执行添加
Route::any("/role/role_list",'Admin\RoleController@role_list');//后台角色展示
Route::any("/role/del",'Admin\RoleController@del');//后台角色删除
Route::any("/role/update/{id}",'Admin\RoleController@update');//后台角色修改
Route::any("/role/updatedo",'Admin\RoleController@updatedo');//后台角色修改


Route::any("/admin/mycourse",'Admin\AdminController@mycourse');//信息展示


Route::any("/rbac/priv","Admin\AdminController@priv");//权限
Route::any("/rbac/privDo","Admin\AdminController@privDo");//权限执行
Route::any("/rbac/priv_list","Admin\AdminController@priv_list");//权限展示
Route::any("/rbac/priv_del","Admin\AdminController@priv_del");//权限删除
Route::any("/rbac/priv_up/{id}","Admin\AdminController@priv_up");//权限修改
Route::any("/rbac/priv_upDo","Admin\AdminController@priv_upDo");//权限修改执行


Route::any("/user/user_add",'Admin\UserController@user_add');//后台用户添加
Route::any("/user/store",'Admin\UserController@store');//后台用户执行添加
Route::any("/user/user_list",'Admin\UserController@user_list');//后台用户展示
Route::any("/user/del",'Admin\RoleController@del');//后台用户删除
Route::any("/user/update/{id}",'Admin\UserController@update');//后台用户修改
Route::any("/user/updatedo",'Admin\UserController@updatedo');//后台用户修改


Route::any("/userrole/userrole/{id}",'Admin\UserroleController@userrole');//后台用户添加
Route::any("/userrole/store",'Admin\UserroleController@store');//后台用户执行添加
Route::any("/userrole/index",'Admin\UserroleController@index');//后台用户展示
Route::any("/userrole/del",'Admin\UserroleController@del');//后台用户删除
Route::any("/userrole/update/{id}",'Admin\UserroleController@update');//后台用户修改
Route::any("/userrole/updatedo",'Admin\UserroleController@updatedo');//后台用户修改




Route::any("/exam/exam_add",'Admin\AdminController@exam_add');//后台考试添加
Route::any("/exam/exam_list",'Admin\AdminController@exam_list');//后台考试展示
Route::any("/exam/exam_del",'Admin\AdminController@exam_del');//后台考试删除
Route::any("/exam/exam_upd",'Admin\AdminController@exam_upd');//后台考试修改
Route::any("/exam/exam_upd_do",'Admin\AdminController@exam_upd_do');//后台考试修改执行

Route::any("/rbac/role_priv","Admin\AdminController@role_priv");//角色权限
Route::any("/rbac/role_privDo","Admin\AdminController@role_privDo");//角色权限执行
Route::any("/rbac/role_priv_list","Admin\AdminController@role_priv_list");//角色权限执行

Route::any("/notice/notice_add",'Admin\AdminController@notice_add');//后台公告添加
Route::any("/notice/notice_list",'Admin\AdminController@notice_list');//后台公告展示
Route::any("/notice/notice_del",'Admin\AdminController@notice_del');//后台公告删除
Route::any("/notice/notice_upd",'Admin\AdminController@notice_upd');//后台公告修改
Route::any("/notice/notice_upd_do",'Admin\AdminController@notice_upd_do');//后台公告修改执行


Route::any("/navigation/navigation_add",'Admin\NavController@navigation_add');//后台导航栏添加
Route::any("/navigation/navigation_list",'Admin\NavController@navigation_list');//后台导航栏展示
Route::any("/navigation/navigation_del",'Admin\NavController@navigation_del');//后台导航栏删除
Route::any("/navigation/navigation_upd/{nav_id}",'Admin\NavController@navigation_upd');//后台导航栏修改
Route::any("/navigation/navigation_upd_do",'Admin\NavController@navigation_upd_do');//后台导航栏修改执行

Route::any("/links/links_add",'Admin\LinksController@links_add');//友情链接添加
Route::any("/links/links_list",'Admin\LinksController@links_list');//友情链接展示
Route::any("/links/links_del",'Admin\LinksController@links_del');//友情链接删除
Route::any("/links/links_upd/{links_id}",'Admin\LinksController@links_upd');//友情链接修改
Route::any("/links/links_upd_do",'Admin\LinksController@links_upd_do');//友情链接修改执行

Route::any("/singcho/singcho_add",'Admin\AdminController@singcho_add');//后台单选题添加
Route::any("/singcho/singcho_list",'Admin\AdminController@singcho_list');//后台单选题展示
Route::any("/singcho/singcho_del",'Admin\AdminController@singcho_del');//后台单选题删除
Route::any("/singcho/singcho_upd",'Admin\AdminController@singcho_upd');//后台单选题修改
Route::any("/singcho/singcho_upd_do",'Admin\AdminController@singcho_upd_do ');//后台单选题修改执行

Route::any("/mucho/mucho_add",'Admin\AdminController@mucho_add');//后台单选题添加
Route::any("/mucho/mucho_list",'Admin\AdminController@mucho_list');//后台单选题展示
Route::any("/mucho/mucho_del",'Admin\AdminController@mucho_del');//后台单选题删除
Route::any("/mucho/mucho_upd",'Admin\AdminController@mucho_upd');//后台单选题修改
Route::any("/mucho/mucho_upd_do",'Admin\AdminController@mucho_upd_do ');//后台单选题修改执行