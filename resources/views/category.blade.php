@extends('layouts.main_layout')
@section('title_page', 'Темы')
@section('content')
    <section class="searchPage">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8">
                    <h2 class="pageTitle">
                        {{$sub}}
                    </h2>
                    <div class="searchResults">
                        <p>Выберите нужный класс</p>
                        @if(count($groups) == 0)
                            <p>Тем не найдено</p>
                        @endif
                        @foreach($groups as $group)
                            <a class="searchResults__el searchResults__el--blue" href="{{route('themes', [$sub, $group->number])}}">
                                <span class="searchResults__el-title">{{$group->number}} класс</span>
                            </a>
                        @endforeach
                    </div>
                    @if(count($groups) > 0)
                    {{ $groups->links('pagination.index') }}
                    @endif
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    @if($video != null)
                    <div class="categoryVideo categoryVideo--blue categoryVideo--medium">
                            @foreach($themes as $theme)
                                @if($theme->id == $video['theme_id'])
                                    @foreach($groups as $group)
                                        @if($group->id == $video['class_id'])
                                        <a href="{{route('video', [$group->number, $theme->title, $video['id']])}}" class="categoryVideo__imgContainer">

{{--                            <img src="/img/maths.jpg" class="categoryVideo__img" alt="#">--}}
{{--                            <span class="categoryVideo__play"></span>--}}
                            {!! $video['video_frame'] !!}
                            <span class="categoryVideo__class">{{$group->number}}</span>
                        </a>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                        @foreach($themes as $theme)
                            @if($theme->id == $video['theme_id'])
                                @foreach($groups as $group)
                                    @if($group->id == $video['class_id'])
                                    <h3 class="categoryVideo__title"><a href="{{route('video', [$group->number, $theme->title, $video['id']])}}" class="categoryVideo__title-link">{{$video['title']}}</a></h3>
                                    @endif
                                    @endforeach
                                @endif
                        @endforeach
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </section>

@endsection
