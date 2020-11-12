<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CataModel extends Model
{
    protected $table="catagory";
    protected $primaryKey="cata_id";
    public $timestamps=false;
}
