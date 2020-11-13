<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CoursedataModel extends Model
{
    //
	protected $table = 'cur_data';

	protected  $primaryKey ='cd_id';

	public $timestamps = false;



}
