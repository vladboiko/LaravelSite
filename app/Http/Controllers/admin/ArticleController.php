<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
			$articles = Article::orderBy('id','desc')->get();
			return view('admin.articles.index_articles',['articles'=>$articles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.articles.create_article');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $new_article = new article();
		$new_article->article_title = $request->article_title;
		$new_article->questions = $request->questions;
		$new_article->article_full = $request->article_full;
		$new_article->author_id = $request->author_id;
		$new_article->theme_id = $request->theme_id;

		$new_article->save();
		return redirect()->back()->withSuccess('article '.$new_article->article_title.'  was success added');
	

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        return view('single',['article'=>$article]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
         return view('admin.articles.edit_article',['article'=>$article]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
          $article->article_title = $request->article_title;
        $article->questions = $request->questions;
        $article->article_full = $request->article_full;
        $article->theme_id = $request->theme_id;
        $article->author_id = $request->author_id;
		$article->save();
		return redirect()->back()->withSuccess('The article '.$article->article_title.' was success updating');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $article->delete();
		return redirect()->back()->withSuccess('The article '.$article->article_title.' was success deleting');
    }
}
