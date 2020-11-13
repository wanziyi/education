<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ProblemModel extends Model
{
    protected $table = "problem";
    protected $primaryKey = "pro_id";
    public $timestamps = false;
    protected $guarded=[];
}
