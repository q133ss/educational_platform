@extends('layouts.main_layout')
@section('title_page')
    {{$theme->title}}
@endsection

@section('content')
    <section class="catalogPage">
        <div class="container">
            <h2 class="pageTitle">
                {{$page_title['title']}}
                <span class="pageTitle__additional">
            <span class="pageTitle__additional-el">{{$class}} @lang('main.class')</span>
          </span>
            </h2>
            <h2 class="pageTitle fw800">
                Тема: {{$theme->title}}
            </h2>
            <div class="row">
                <div class="col-xl-8 col-lg-9">
                    <div class="videoBlock videoBlock--blue">

                        @foreach($videos as $video)
                            {!! $video->video_frame !!}
                        <div class="videoBlock__text">{{$video->title}}</div>
                            @break
                        @endforeach
                    </div>
                    <h3 class="pageSubtitle d-lg-none d-block">@lang('related_themes')</h3>
                    <div class="owl-carousel catalogCarousel">
                        @foreach($videos as $video)
                            <div class="categoryVideo categoryVideo--blue categoryVideo--small">
                                <a href="{{route('video', [$class, $theme->title, $video->id])}}" class="categoryVideo__imgContainer">
                                    {!! $video->video_frame !!}
                                    <span class="categoryVideo__play"></span>
                                    <span class="categoryVideo__class">
                                        @foreach($groups as $group)
                                            @if($group['id'] == $video['class_id'])
                                                {{$group['number']}}
                                            @endif
                                        @endforeach
                                    </span>
                                </a>
                                <h3 class="categoryVideo__title"><a href="{{route('video', [$class, $theme->title, $video->id])}}" class="categoryVideo__title-link">{{$video->title}}</a></h3>
                            </div>
                        @endforeach

                    </div>
                </div>
                <div class="col-xl-4 col-lg-3 d-lg-block d-none">
                    <div class="row smallVideos">
                        @foreach($all_videos->take(6) as $all_video)
                        <div class="col-xl-6">
                            <div class="categoryVideo categoryVideo--blue categoryVideo--small">
                                <a href="{{route('video', [$class, $theme->title, $all_video->id])}}" class="categoryVideo__imgContainer">
                                    {!! $all_video->video_frame !!}
                                    <span class="categoryVideo__play"></span>
                                    <span class="categoryVideo__class">
                                        @foreach($groups as $group)
                                            @if($group['id'] == $all_video['class_id'])
                                                {{$group['number']}}
                                            @endif
                                        @endforeach
                                    </span>
                                </a>
                                <h3 class="categoryVideo__title"><a href="{{route('video', [$class, $theme->title, $all_video->id])}}" class="categoryVideo__title-link">{{$all_video->title}}</a></h3>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
