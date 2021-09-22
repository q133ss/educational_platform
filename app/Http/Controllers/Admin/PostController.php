<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Group;
use App\Models\Post;
use App\Models\Theme;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view('admin.post.index', [
            'posts' => $posts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::orderBy('created_at', 'DESC')->get();
        $groups = Group::orderBy('created_at', 'DESC')->get();
        $theme = Theme::orderBy('created_at', 'DESC')->get();
        return view('admin.post.create', [
            'categories' => $categories,
            'groups' => $groups,
            'themes' => $theme
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Post();
        $post->title = $request->title;
        $post->title_kz = $request->title_kz;
        $post->title_en = $request->title_en;
        $post->cat_id = $request->cat_id;
        $post->class_id = $request->class_id;
        $post->video_frame = $request->video_code;
        $post->theme_id = $request->theme_id;

        $post->save();

        return redirect()->back()->withSuccess('Урок успешно добавлен!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $categories = Category::orderBy('created_at', 'DESC')->get();
        $groups = Group::orderBy('created_at', 'DESC')->get();
        $themes = Theme::orderBy('created_at', 'DESC')->get();
        return view('admin.post.edit', [
            'post' => $post,
            'categories' => $categories,
            'groups' => $groups,
            'themes' => $themes
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $post->title = $request->title;
        $post->title_kz = $request->title_kz;
        $post->title_en = $request->title_en;
        $post->cat_id = $request->cat_id;
        $post->video_frame = $request->video_code;
        $post->class_id = $request->class_id;
        $post->theme_id = $request->theme_id;
        $post->save();
        return redirect()->back()->withSuccess('Урок обновлен!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->back()->withSuccess('Предмет успешно удален!');
    }
}
