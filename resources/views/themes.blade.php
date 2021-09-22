@extends('layouts.main_layout')
@section('title_page', 'Темы')
@section('content')
    <section class="searchPage">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8">
                    <h2 class="pageTitle">
                        {{$sub}}
                        <span class="pageTitle__additional">
                <span class="pageTitle__additional-el">{{$class}} @lang('main.class')</span>
              </span>
                    </h2>
                    <div class="searchResults">
                        @if(count($themes) == 0)
                            <p>@lang('main.theme_not_founded')</p>
                        @endif
                        @foreach($themes as $theme)
                            @foreach($groups as $group)
                                @if($group->id == $theme->class_id)
                            <a class="searchResults__el searchResults__el--blue" href="{{route('catalog', [$class, $theme->id])}}">
                                <span class="searchResults__el-title">{{$theme->title}}</span>
                                <span class="searchResults__el-class">{{$group->number}} @lang('main.class')</span>
                            </a>
                                    @endif
                                @endforeach
                        @endforeach
                    </div>
                    @if(count($themes) > 0)
                    {{ $themes->links('pagination.index') }}
                    @endif
{{--                    There are been pagination--}}
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    @if(count($themes) > 0)
                    <div class="categoryVideo categoryVideo--blue categoryVideo--medium">
                        @foreach($themes as $theme)
                            @if($theme->id == $video['theme_id'])
                        <a href="{{route('video', [$class, $theme->title, $video['id']])}}" class="categoryVideo__imgContainer">
                            @endif
                            @endforeach
{{--                            <img src="/img/maths.jpg" class="categoryVideo__img" alt="#">--}}
                            <span class="categoryVideo__play"></span>
                            {!! $video['video_frame'] !!}
                            <span class="categoryVideo__class">{{$class}}</span>
                        </a>
                        @foreach($themes as $theme)
                            @if($theme->id == $video['theme_id'])
                        <h3 class="categoryVideo__title"><a href="{{route('video', [$class, $theme->title, $video['id']])}}" class="categoryVideo__title-link">{{$video['title']}}</a></h3>
                        @endif
                        @endforeach
                    </div>
                        @endif
                </div>
            </div>
        </div>
    </section>

@endsection
