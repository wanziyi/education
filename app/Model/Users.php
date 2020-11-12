<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = "users";
    protected $primaryKey = "u_id";
    public $timestamps = false;
    protected $guarded=[];
}
