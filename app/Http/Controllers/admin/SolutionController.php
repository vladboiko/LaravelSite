<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Solution;
use Illuminate\Http\Request;

class SolutionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $solutions = Solution::orderBy('id','desc')->get();
		return view('admin.solutions.index_solutions',['solutions'=>$solutions]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.solutions.create_solution');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $new_solution = new solution();
		$new_solution->solution_title = $request->solution_title;
		$new_solution->solution_description = $request->solution_description;
		$new_solution->solution_during = $request->solution_during;
		$new_solution->solution_example = $request->solution_example;

		$new_solution->save();
		return redirect()->back()->withSuccess('solution '.$new_solution->solution_title.'  was success added');
	
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Solution  $solution
     * @return \Illuminate\Http\Response
     */
    public function show(Solution $solution)
    {
        return view('admin.solutions.show_solution',['solution'=>$solution]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Solution  $solution
     * @return \Illuminate\Http\Response
     */
    public function edit(Solution $solution)
    {
        return view('admin.solutions.edit_solution',['solution'=>$solution]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Solution  $solution
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Solution $solution)
    {
              $solution->solution_title = $request->solution_title;
        $solution->solution_description = $request->solution_description;
        $solution->solution_during = $request->solution_during;
        $solution->solution_example = $request->solution_example;
		$solution->save();
		return redirect()->back()->withSuccess('The solution '.$solution->solution_title.' was success updating');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Solution  $solution
     * @return \Illuminate\Http\Response
     */
    public function destroy(Solution $solution)
    {
        $solution->delete();
		return redirect()->back()->withSuccess('The solution '.$solution->solution_title.' was success deleting');
    }
}
