@extends('layouts.main_layout')
@section('content')

    <div class="categoryVideoMain">
        <div class="container">
            <div class="row">
                @foreach($categories as $cat)
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="categoryVideo categoryVideo--turquoise">
                            <a href="{{route('category', [$cat->title])}}" class="categoryVideo__imgContainer">
                                <img src="{{$cat->picture}}" class="categoryVideo__img" alt="#">
                                <span class="categoryVideo__play" data-toggle="modal" data-target="#categoryModal{{$cat->id}}"></span>
                            </a>
                            <h3 class="categoryVideo__title"><a href="{{route('category', [$cat->title])}}" class="categoryVideo__title-link">{{$cat->title}}</a></h3>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
