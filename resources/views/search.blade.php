@extends('layouts.main_layout')
@section('title_page', "Поиск")

    @section('content')
<section class="searchPage">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="dropdownSimple dropdownSimple--classes">
                    <div class="dropdown">
                        <button class="dropdown__toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">@lang('main.by_class')</button>
                        <div class="dropdown-menu">
                            @foreach($groups as $group)
                            <span class="dropdown-item @if($req->class_id == $group->id) active @endif" onclick="get_class({{$group->id}})">{{$group->number}} @lang('main.class')</span>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="dropdownSimple">
                    <div class="dropdown">
                        <button class="dropdown__toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">@lang('main.on_sub')</button>
                        <div class="dropdown-menu text-center">
                            @foreach($categories as $category)
                                @if(session('locale') == "ru")
                            <span class="dropdown-item @if($req->category_id == $category->id) active @endif" onclick="get_category({{$category->id}})">{{$category->title}}</span>
                                @endif
                                    @if(session('locale') == "kz")
                                        <span class="dropdown-item @if($req->category_id == $category->id) active @endif" onclick="get_category({{$category->id}})">{{$category->title_kz}}</span>
                                    @endif

                                    @if(session('locale') == "en")
                                        <span class="dropdown-item @if($req->category_id == $category->id) active @endif" onclick="get_category({{$category->id}})">{{$category->title_en}}</span>
                                    @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <h2 class="pageTitle" onclick="filter()">
                    @lang('main.refults_for') {{$req->search}}
                    <span class="pageTitle__additional">
                        @if(isset($req->class_id))
                <span class="pageTitle__additional-el">{{$class_num['number']}} @lang('main.class')</span>
                        @endif
                        @if(isset($req->category_id))
                <span class="pageTitle__additional-el">{{$cat_title['title']}}</span>
                        @endif
              </span>
                </h2>
                <div class="searchResults">
                    @if(count($posts))
                    @foreach($posts as $post)
                        @foreach($themes as $theme)
                            @if($theme->id == $post->theme_id)
                                @foreach($groups as $group)
                                    @if($group->id == $post->class_id)
                    <a class="searchResults__el searchResults__el--turquoise" href="{{route('video', [$group->number, $theme->title, $post->id])}}">
                        @if(session('locale') == "ru")
                        <span class="searchResults__el-title">{{$post->title}}</span>
                        @endif

                            @if(session('locale') == "kz")
                                <span class="searchResults__el-title">{{$post->title_kz}}</span>
                            @endif

                            @if(session('locale') == "en")
                                <span class="searchResults__el-title">{{$post->title_en}}</span>
                            @endif
                        <span class="searchResults__el-class">{{$group->number}} @lang('main.class')</span>
                    </a>
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach
                    @endforeach
                        {{$posts->withQueryString()->links('pagination.index')}}
                    @else
                        <p>
                        @lang('main.no_results') <br>
                        @lang('main.try_changing')
                        </p>
                        @endif

                </div>
            </div>
        </div>
    </div>
</section>

<script>
    $class = '';
    $cat = '';
    function get_class(id){
        $class = id;
        video_filter();
    }

    function get_category(id){
        $cat = id;
        video_filter();
    }

    function video_filter(){
        url = '{{url()->full()}}?&class_id='+$class+'&category_id='+$cat;
        //$('.searchPage').remove();
        $('.searchPage').load(url+' .searchPage');
    }
</script>
    @endsection
