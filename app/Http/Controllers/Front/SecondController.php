<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Second;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SecondController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
				$second = DB::select('select id, article_full from articles');
		//	$first = "gfgggdgdg";
			return view('second_front',['second'=>$second]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Second  $second
     * @return \Illuminate\Http\Response
     */
    public function show(Second $second)
    {
		//$second = DB::select('select id, article_title, article_full from articles');
		//$second= Article::orderBy('id','desc')->get();
        return view('single',['article'=>$second]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Second  $second
     * @return \Illuminate\Http\Response
     */
    public function edit(Second $second)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Second  $second
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Second $second)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Second  $second
     * @return \Illuminate\Http\Response
     */
    public function destroy(Second $second)
    {
        //
    }
}
