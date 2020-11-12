<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Rotation extends Model
{
    protected $table = "rotation";
    protected $primaryKey = "rota_id";
    public $timestamps = false;
    protected $guarded=[];
}
