<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Task;

class homecontroller extends Controller
{
    public function index(){
		$tasks = Task::orderBy('reg_date','desc')->get();
	return view('index_dashboard',['tasks'=>$tasks]);
	}
}
