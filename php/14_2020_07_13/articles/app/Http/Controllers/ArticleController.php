<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $articles = Article::paginate(5);
        return view('articles.show',['articles' =>$articles]);
    }

   /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //
        $blog = Article::find($article->id);
        return view('articles.show_article',['article'=>$article]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
         // dd($request->noidung);
        $create = new Article;
        $create->title = $request->title;
        $create->slug = Str::slug($request->title, '-');

        $create->description = $request->description;
        $create->content = $request->content;
        $create->save();
        return redirect()->back()->with('thongbao','thêm mới bài viết thành công');
    }

    public function edit(Article $article)
    {
        //
        $article = Article::find($article->id);

        return view('articles.edit',['article' => $article]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        //
        // dd($request->noidung);
        $update = Article::find($article->id);
        $update->title = $request->title;
        $update->slug = Str::slug($request->title);
        $update->content = $request->content;
        $update->save();
        return redirect()->back()->with('thongbao','sửa bài viết thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Articlelog  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        //
        Article::destroy($article->id);
        return redirect()->route('articles.index')->with('thongbao','xóa bài viết thành công');
    }
}