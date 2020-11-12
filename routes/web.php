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
Route::any("/admin/index",'Admin\AdminController@index');//后台首页
Route::any("/course/course_add",'Admin\AdminController@course_add');//后台课程添加
Route::any("/course/course_list",'Admin\AdminController@course_list');//后台课程展示
Route::any("/course/course_del",'Admin\AdminController@course_del');//后台课程删除
Route::any("/course/course_upd",'Admin\AdminController@course_upd');//后台课程修改
Route::any("/course/course_upd_do",'Admin\AdminController@course_upd_do');//后台课程修改执行

Route::any("/question/question_add",'Admin\AdminController@question_add');//后台题库添加
Route::any("/question/question_list",'Admin\AdminController@question_list');//后台题库展示
Route::any("/question/question_del",'Admin\AdminController@question_del');//后台课程删除
Route::any("/question/question_upd",'Admin\AdminController@question_upd');//后台课程修改
Route::any("/question/question_upd_do",'Admin\AdminController@question_upd_do');//后台课程修改执行

Route::any("/info/info_add",'Admin\AdminController@info_add');//后台资讯添加
Route::any("/info/info_list",'Admin\AdminController@info_list');//后台资讯展示
Route::any("/info/info_del",'Admin\AdminController@info_del');//后台课程删除
Route::any("/info/info_upd",'Admin\AdminController@info_upd');//后台课程修改
Route::any("/info/info_upd_do",'Admin\AdminController@info_upd_do');//后台课程修改执行

Route::any("/personal/personal_add",'Admin\AdminController@personal_add');//后台讲师添加
Route::any("/personal/personal_list",'Admin\AdminController@personal_list');//后台讲师展示
Route::any("/personal/personal_del",'Admin\AdminController@personal_del');//后台课程删除
Route::any("/personal/personal_upd",'Admin\AdminController@personal_upd');//后台课程修改
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





