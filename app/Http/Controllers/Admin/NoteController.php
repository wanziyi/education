<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\NoteModel;

class NoteController extends Controller
{
    public function note_add()
    {
        $note = new NoteModel();
        $where = [
            "note_del"=>1
        ];
        $data = NoteModel::where($where)->paginate(2);
        // dd($data);
        return view("note.note_add",["data"=>$data]);
    }//后台用户笔记添加

     public function note_list()
     {
         $note = new NoteModel;
         $data = request()->all();
         $note_time = time();
         $res = NoteModel::insert($data);
         if($res){
             $arr = [
                 "code"=>00004,
                 "message"=>"笔记添加成功",
                 "url"=>"/note/note_add"
             ];
         }else{
             $arr = [
                 "code"=>00005,
                 "message"=>"笔记添加失败",
                 "url"=>"/note/note_add"
             ];
         }
         return json_encode($arr);
     }//后台用户笔记展示

     public function note_del()
     {
         $note_id = request()->note_id;
         $note = new NoteModel;
         $data = $note::where('note_id',$note_id)->update(["note_del"=>0]);
         if($data){
             $arr = [
                 "code"=>00006,
                 "message"=>"笔记删除成功",
                 "url"=>"/note/note_add"
             ];
         }else{
             $arr = [
                 "code"=>"00007",
                 "message"=>"笔记删除失败",
                 "url"=>"/note/note_add",
             ];
         }
         return json_encode($arr);
     }

    public function note_upd()
    {
        return view("note.note_upd");
    }//后台用户笔记修改

}