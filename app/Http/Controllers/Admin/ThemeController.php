<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Group;
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
        $themes = Theme::orderBy('created_at', 'DESC')->get();
        return view('admin.theme.index', [
            'themes' => $themes
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
        $classes = Group::orderBy('created_at', 'DESC')->get();
        return view('admin.theme.create',[
            'categories' => $categories,
            'classes' => $classes
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
        $theme = new Theme();
        $theme->title = $request->title;
        $theme->title_en = $request->title_en;
        $theme->title_kz = $request->title_kz;
        $theme->cat_id = $request->cat_id;
        $theme->class_id = $request->class_id;

        $theme->save();

        return redirect()->back()->withSuccess('Тема успешно добавлена!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Theme  $theme
     * @return \Illuminate\Http\Response
     */
    public function show(Theme $theme)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Theme  $theme
     * @return \Illuminate\Http\Response
     */
    public function edit(Theme $theme)
    {
        $categories = Category::orderBy('created_at', 'DESC')->get();
        $classes = Group::orderBy('created_at', 'DESC')->get();
        return view('admin.theme.edit',[
            'theme' => $theme,
            'categories' => $categories,
            'classes' => $classes
        ]);
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
        $theme->title = $request->title;
        $theme->title_en = $request->title_en;
        $theme->title_kz = $request->title_kz;
        $theme->cat_id = $request->cat_id;
        $theme->class_id = $request->class_id;
        $theme->save();
        return redirect()->back()->withSuccess('Тема обновлена!');
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
        return redirect()->back()->withSuccess('Тема успешно удалена!');
    }
}
