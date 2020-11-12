<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Urole extends Model
{
    protected $table="user_role";
    protected $primaryKey="id";
    public $timestamps=false;
}
