<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CurModel extends Model
{
    protected $table="curriculum";
    protected $primaryKey="cur_id";
    public $timestamps=false;
}
