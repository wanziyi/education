<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class AnswerModel extends Model
{
    protected $table = "answer";
    protected $primaryKey = "ans_id";
    public $timestamps = false;
    protected $guarded=[];
}
