<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Theme;
use Illuminate\Http\Request;

class ThemeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$themes = Theme::orderBy('id','desc')->get();
        return view('all_themes',['themes'=>$themes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		return view('admin.categories.create_theme');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $new_theme = new Theme();
		$new_theme->theme_title = $request->theme_title;
		$new_theme->theme_description = $request->theme_description;
		$new_theme->id = $request->id+1;
		
		$new_theme->save();
		return redirect()->back()->withSuccess('Theme '.$new_theme->title.'  was success addition');
		}

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Theme  $theme
     * @return \Illuminate\Http\Response
     */
    public function show(Theme $theme)
    {
			return view('front.themes.show_theme',['theme'=>$theme]); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Theme  $theme
     * @return \Illuminate\Http\Response
     */
    public function edit(Theme $theme)
    {

        return view('admin.categories.edit',['theme'=>$theme]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Theme  $theme
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Theme $theme)
    {
                $theme->theme_title = $request->theme_title;
         $theme->theme_description = $request->theme_description;
		$theme->save();
		return redirect()->back()->withSuccess('Category was success updating');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Theme  $theme
     * @return \Illuminate\Http\Response
     */
    public function destroy(Theme $theme)
	
    {
			 $theme->delete();
			return redirect()->back()->withSuccess('Theme '.$theme->theme_title.' was success deleting');
    }
}
