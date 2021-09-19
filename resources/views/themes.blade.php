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
                        @foreach($video as $v)
                            <a class="searchResults__el searchResults__el--blue" href="#">
                                <span class="searchResults__el-title">{{$v->title}}</span>
                                <span class="searchResults__el-class">{{$v->class_id}} класс</span>
                            </a>
                        @endforeach
{{--                       --}}
{{--                        <a class="searchResults__el searchResults__el--blue" href="#">--}}
{{--                            <span class="searchResults__el-title">Физика - наука о природе</span>--}}
{{--                            <span class="searchResults__el-class">7 класс</span>--}}
{{--                        </a>--}}
{{--                        <a class="searchResults__el searchResults__el--blue" href="#">--}}
{{--                            <span class="searchResults__el-title">Научные методы изучения природы</span>--}}
{{--                            <span class="searchResults__el-class">7 класс</span>--}}
{{--                        </a>--}}
{{--                        <a class="searchResults__el searchResults__el--blue" href="#">--}}
{{--                            <span class="searchResults__el-title">Физические величины и их измерения</span>--}}
{{--                            <span class="searchResults__el-class">7 класс</span>--}}
{{--                        </a>--}}
{{--                        <a class="searchResults__el searchResults__el--blue" href="#">--}}
{{--                            <span class="searchResults__el-title">Международная система единиц</span>--}}
{{--                            <span class="searchResults__el-class">7 класс</span>--}}
{{--                        </a>--}}
{{--                        <a class="searchResults__el searchResults__el--blue" href="#">--}}
{{--                            <span class="searchResults__el-title">Точность измерений и вычислений</span>--}}
{{--                            <span class="searchResults__el-class">7 класс</span>--}}
{{--                        </a>--}}
{{--                        <a class="searchResults__el searchResults__el--blue" href="#">--}}
{{--                            <span class="searchResults__el-title">Запись больших и малых чистел</span>--}}
{{--                            <span class="searchResults__el-class">7 класс</span>--}}
{{--                        </a>--}}
{{--                        <a class="searchResults__el searchResults__el--blue" href="#">--}}
{{--                            <span class="searchResults__el-title">Механическое движение и его характеристики</span>--}}
{{--                            <span class="searchResults__el-class">7 класс</span>--}}
{{--                        </a>--}}
{{--                        <a class="searchResults__el searchResults__el--blue" href="#">--}}
{{--                            <span class="searchResults__el-title">Механическое движение и его характеристики. Практическая часть. Решение задач</span>--}}
{{--                            <span class="searchResults__el-class">7 класс</span>--}}
{{--                        </a>--}}
{{--                        <a class="searchResults__el searchResults__el--blue" href="#">--}}
{{--                            <span class="searchResults__el-title">Механическое движение и его характеристики ч.2</span>--}}
{{--                            <span class="searchResults__el-class">7 класс</span>--}}
{{--                        </a>--}}
{{--                        <a class="searchResults__el searchResults__el--blue" href="#">--}}
{{--                            <span class="searchResults__el-title">Механическое движение и его характеристики. Практическая часть. Решение задач. Ч.2</span>--}}
{{--                            <span class="searchResults__el-class">7 класс</span>--}}
{{--                        </a>--}}
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
                            <img src="/img/maths.jpg" class="categoryVideo__img" alt="#">
                            <span class="categoryVideo__play"></span>
                            <span class="categoryVideo__class">7</span>
                        </a>
                        <h3 class="categoryVideo__title"><a href="#" class="categoryVideo__title-link">Относительность механического движения</a></h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
