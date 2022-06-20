<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$tasks = Task::orderBy('id','desc')->get();
			return view("admin.tasks.index_tasks",['tasks'=>$tasks]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		return view('admin.tasks.create_task');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $new_task = new task();
		$new_task->task_title = $request->task_title;
		$new_task->task_text = $request->task_text;
		
		$new_task->save();
		return redirect()->back()->withSuccess('task '.$new_task->task_title.'  was success added');
	
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        return view('front.tasks.show_task',['task'=>$task]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
    {
     return view('admin.tasks.edit_task',['task'=>$task]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task $task)
    {
        $task->task_title = $request->task_title;
        $task->task_text = $request->task_text;
        $task->theme_id = $request->theme_id;
        $task->solution_id = $request->solution_id;
		$task->save();
		return redirect()->back()->withSuccess('The task '.$task->task_title.' was success updating');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        $task->delete();
		return redirect()->back()->withSuccess('The task '.$task ->task_title.' was success deleting');
    }
}
