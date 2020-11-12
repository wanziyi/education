<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    protected $table = "personal";
    protected $primaryKey = "per_id";
    public $timestamps = false;
    protected $guarded=[];
}
