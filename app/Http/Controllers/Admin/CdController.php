<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CdController extends Controller
{
    public function cd_add(){
    	return view("cd.cd_add");
    }
    public function cd_list(){
    	return view("cd.cd_list");
    }
    public function update(){
    	return view("cd/update");
    }
}
