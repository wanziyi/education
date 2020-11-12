<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TaskModel extends Model
{
    protected $table = "task";
    protected $primaryKey = "task_id";
    public $timestamps = false;
    protected $guarded=[];
}
