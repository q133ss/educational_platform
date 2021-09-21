@extends('layouts.main_layout')
@section('title_page', "Поиск")

    @section('content')
<section class="searchPage">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="dropdownSimple dropdownSimple--classes">
                    <div class="dropdown">
                        <button class="dropdown__toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">По классам</button>
                        <div class="dropdown-menu">
                            @foreach($groups as $group)
                            <span class="dropdown-item" onclick="get_class({{$group->id}})">{{$group->number}} класс</span>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="dropdownSimple">
                    <div class="dropdown">
                        <button class="dropdown__toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">По предметам</button>
                        <div class="dropdown-menu text-center">
                            @foreach($categories as $category)
                            <span class="dropdown-item" onclick="get_category({{$category->id}})">{{$category->title}}</span>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <h2 class="pageTitle" onclick="filter()">
                    Результаты поиска: 1111
                    <span class="pageTitle__additional">
                <span class="pageTitle__additional-el">6 класс</span>
                <span class="pageTitle__additional-el">Биология</span>
              </span>
                </h2>
                <div class="searchResults">
                    @if(count($posts))
                    @foreach($posts as $post)
                    <a class="searchResults__el searchResults__el--turquoise" href="#">
                        <span class="searchResults__el-title">{{$post->title}}</span>
                        <span class="searchResults__el-class">{{$post->class_id}} НЕПРАВИЛЬНО!!! класс</span>
                    </a>
                    @endforeach
                        {{$posts->withQueryString()->links('pagination.index')}}
                    @else
                        <p>
                        По Вашему запросу ничего не найдено. <br>
                        Попробуйте изменить ключевые слова, либо настройте фильтр.
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
        url = '?class_id='+$class+'&category_id='+$cat;
        //$('.searchPage').remove();
        $('.searchPage').load(url+' .searchPage');
    }
</script>
    @endsection
