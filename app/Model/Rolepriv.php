<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Rolepriv extends Model
{
    protected $table = "rolepriv";
    protected $primaryKey = "id";
    public $timestamps = false;
    protected $guarded=[];
}
