<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PaperModel extends Model
{
    protected $table = "paper";
    protected $primaryKey = "paper_id";
    public $timestamps = false;
    protected $guarded=[];
}
