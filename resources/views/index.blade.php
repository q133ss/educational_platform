@extends('layouts.main_layout')
@section('content')

    <div class="categoryVideoMain">
        <div class="container">
            <div class="row">
                @foreach($categories as $cat)
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="categoryVideo categoryVideo--turquoise">
                            <a href="#" class="categoryVideo__imgContainer">
                                <img src="{{$cat->picture}}" class="categoryVideo__img" alt="#">
                                <span class="categoryVideo__play" data-toggle="modal" data-target="#categoryModal{{$cat->id}}"></span>
                            </a>
                            <h3 class="categoryVideo__title"><a href="#" class="categoryVideo__title-link">{{$cat->title}}</a></h3>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="categoryModal{{$cat->id}}" tabindex="-1" role="dialog" aria-labelledby="categoryModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="categoryModalLabel">{{$cat->title}}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    {!!$cat->video_code!!}
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="categoryVideo categoryVideo--turquoise">
                        <a href="#" class="categoryVideo__imgContainer">
                            <img src="img/biology.jpg" class="categoryVideo__img" alt="#">
                            <span class="categoryVideo__play"></span>
                        </a>
                        <h3 class="categoryVideo__title"><a href="#" class="categoryVideo__title-link">Биология</a></h3>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="categoryVideo categoryVideo--red">
                        <a href="#" class="categoryVideo__imgContainer">
                            <img src="img/maths.jpg" class="categoryVideo__img" alt="#">
                            <span class="categoryVideo__play"></span>

                        </a>
                        <h3 class="categoryVideo__title"><a href="#" class="categoryVideo__title-link">Математика</a></h3>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="categoryVideo categoryVideo--violet">
                        <a href="#" class="categoryVideo__imgContainer">
                            <img src="img/chemistry.jpg" class="categoryVideo__img" alt="#">
                            <span class="categoryVideo__play"></span>
                        </a>
                        <h3 class="categoryVideo__title"><a href="#" class="categoryVideo__title-link">Химия</a></h3>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="categoryVideo categoryVideo--blue">
                        <a href="#" class="categoryVideo__imgContainer">
                            <img src="img/physics.jpg" class="categoryVideo__img" alt="#">
                            <span class="categoryVideo__play"></span>
                        </a>
                        <h3 class="categoryVideo__title"><a href="#" class="categoryVideo__title-link">Физика</a></h3>
                    </div>
                </div>
                <!--<div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="categoryVideo categoryVideo--pink">
                        <a href="#" class="categoryVideo__imgContainer">
                            <img src="img/algebra.jpg" class="categoryVideo__img" alt="#">
                            <span class="categoryVideo__play"></span>
                        </a>
                        <h3 class="categoryVideo__title"><a href="#" class="categoryVideo__title-link">Алгебра</a></h3>
                    </div>
                </div>-->
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="categoryVideo categoryVideo--orange">
                        <a href="#" class="categoryVideo__imgContainer">
                            <img src="img/geometry.jpg" class="categoryVideo__img" alt="#">
                            <span class="categoryVideo__play"></span>
                        </a>
                        <h3 class="categoryVideo__title"><a href="#" class="categoryVideo__title-link">Геометрия</a></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
