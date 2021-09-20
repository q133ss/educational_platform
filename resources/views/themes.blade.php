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
                        @foreach($themes as $theme)
                            <a class="searchResults__el searchResults__el--blue" href="{{route('catalog', [$class, $theme->id])}}">
                                <span class="searchResults__el-title">{{$theme->title}}</span>
                                <span class="searchResults__el-class">{{$theme->class}} класс</span>
                            </a>
                        @endforeach

                    </div>
                    <div class="paginationList">
                        <a href="#" class="paginationList__el paginationList__el--prev disabled"></a>
                        <a href="#" class="paginationList__el paginationList__el--number active">1</a>
                        <a href="#" class="paginationList__el paginationList__el--number">2</a>
                        <a href="#" class="paginationList__el paginationList__el--number">3</a>
                        <a href="#" class="paginationList__el paginationList__el--number d-sm-flex d-none">4</a>
                        <a href="#" class="paginationList__el paginationList__el--number d-sm-flex d-none">5</a>
                        <a href="#" class="paginationList__el paginationList__el--number d-md-flex d-none">6</a>
                        <a href="#" class="paginationList__el paginationList__el--number d-md-flex d-none">7</a>
                        <a href="#" class="paginationList__el paginationList__el--number d-md-flex d-none">8</a>
                        <a href="#" class="paginationList__el paginationList__el--dots d-sm-flex d-none">...</a>

                        <a href="#" class="paginationList__el paginationList__el--number d-sm-flex d-none">37</a>
                        <a href="#" class="paginationList__el paginationList__el--next"></a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="categoryVideo categoryVideo--blue categoryVideo--medium">
                        <a href="#" class="categoryVideo__imgContainer">
{{--                            <img src="/img/maths.jpg" class="categoryVideo__img" alt="#">--}}
                            <span class="categoryVideo__play"></span>
                            {!! $video->video_frame !!}
                            <span class="categoryVideo__class">{{$class}}</span>
                        </a>
                        <h3 class="categoryVideo__title"><a href="#" class="categoryVideo__title-link">{{$video->title}}</a></h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
