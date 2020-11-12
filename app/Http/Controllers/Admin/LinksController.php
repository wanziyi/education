<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LinksController extends Controller
{
    public function links_add(){
    	return view("links.links_add");
    }
    public function links_list(){
    	return view("links.links_list");
    }
}
