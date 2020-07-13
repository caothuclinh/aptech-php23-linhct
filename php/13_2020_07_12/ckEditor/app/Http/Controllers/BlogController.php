<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $blogs = Blog::paginate(3);
        return view('blogs.show',['blogs' => $blogs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('blogs.create');
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
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
        $blog = Blog::find($blog->id);
        return view('blogs.show_blog',['blog'=>$blog]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
         // dd($request->noidung);
        $create = new Blog;
        $create->tieude = $request->tieude;
        $create->mota_ngan = $request->mota;
        $create->noidung = $request->noidung;
        $create->save();
        return redirect()->back()->with('thongbao','thêm mới bài viết thành công');
    }

    public function edit(Blog $blog)
    {
        //
        $blog = Blog::find($blog->id);
        return view('blogs.edit',['blog' => $blog]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        //
        // dd($request->noidung);
        $update = Blog::find($blog->id);
        $update->tieude = $request->tieude;
        $update->mota_ngan = $request->mota;
        $update->noidung = $request->noidung;
        $update->save();
        return redirect()->back()->with('thongbao','sửa bài viết thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        //
        Blog::destroy($blog->id);
        return redirect()->back()->with('thongbao','xóa bài viết thành công');
    }
}
