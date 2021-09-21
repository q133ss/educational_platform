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
                <span class="pageTitle__additional-el">{{$class}} класс</span>
              </span>
                    </h2>
                    <div class="searchResults">
                        @if(count($themes) == 0)
                            <p>Тем не найдено</p>
                        @endif
                        @foreach($themes as $theme)
                            <a class="searchResults__el searchResults__el--blue" href="{{route('catalog', [$class, $theme->id])}}">
                                <span class="searchResults__el-title">{{$theme->title}}</span>
                                <span class="searchResults__el-class">{{$theme->class}} класс</span>
                            </a>
                        @endforeach
                    </div>
                    @if(count($themes) > 0)
                    {{ $themes->links('pagination.index') }}
                    @endif
{{--                    There are been pagination--}}
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="categoryVideo categoryVideo--blue categoryVideo--medium">
                        <a href="#" class="categoryVideo__imgContainer">
{{--                            <img src="/img/maths.jpg" class="categoryVideo__img" alt="#">--}}
                            <span class="categoryVideo__play"></span>
                            {!! $video['video_frame'] !!}
                            <span class="categoryVideo__class">{{$class}}</span>
                        </a>
                        <h3 class="categoryVideo__title"><a href="#" class="categoryVideo__title-link">{{$video['title']}}</a></h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
