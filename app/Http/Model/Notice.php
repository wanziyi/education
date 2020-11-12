<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    protected $table = "notice";
    protected $primaryKey = "notice_id";
    public $timestamps = false;
}
