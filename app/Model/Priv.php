<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Priv extends Model
{
    protected $table = "priv";
    protected $primaryKey = "priv_id";
    public $timestamps = false;
    protected $guarded=[];
}
