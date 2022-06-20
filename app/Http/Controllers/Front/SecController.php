<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Sec;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SecController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $first = DB::select('select id, article_full from articles');
		//	$first = "gfgggdgdg";
			return view('second_front',['first'=>$first]);
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
     * @param  \App\Models\Sec  $sec
     * @return \Illuminate\Http\Response
     */
    public function show(Sec $sec)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sec  $sec
     * @return \Illuminate\Http\Response
     */
    public function edit(Sec $sec)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sec  $sec
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sec $sec)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sec  $sec
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sec $sec)
    {
        //
    }
}
