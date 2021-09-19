@extends('layouts.main_layout')
@section('title', '21312321321')

@section('content')
    <section class="catalogPage">
        <div class="container">
            <h2 class="pageTitle">
                Физика
                <span class="pageTitle__additional">
            <span class="pageTitle__additional-el">{{$class_num->number}} класс</span>
          </span>
            </h2>
            <h2 class="pageTitle fw800">
                Тема: {{$video->title}}
            </h2>
            <div class="row">
                <div class="col-xl-8 col-lg-9">
                    <div class="videoBlock videoBlock--blue">
                        {!! $video->video_frame !!}
{{--                        <video--}}
{{--                            id="my-video"--}}
{{--                            class="video-js"--}}
{{--                            controls--}}
{{--                            preload="auto"--}}
{{--                            poster="/img/physics2.jpg"--}}
{{--                            data-setup="{}"--}}

{{--                        >--}}
{{--                            <source src="https://youtu.be/nUP6EcgkpZ4" type="video/mp4" />--}}

{{--                            <p class="vjs-no-js">--}}
{{--                                To view this video please enable JavaScript, and consider upgrading to a--}}
{{--                                web browser that--}}
{{--                                <a href="https://videojs.com/html5-video-support/" target="_blank"--}}
{{--                                >supports HTML5 video</a--}}
{{--                                >--}}
{{--                            </p>--}}
{{--                        </video>--}}
{{--                        <div class="videoBlock__time">1:23</div>--}}
                        <div class="videoBlock__text">Физика - наука о природе</div>
                    </div>
                    <h3 class="pageSubtitle d-lg-none d-block">Похожие темы:</h3>
                    <div class="owl-carousel catalogCarousel">
                        <div class="categoryVideo categoryVideo--blue categoryVideo--small">
                            <a href="#" class="categoryVideo__imgContainer">
                                <img src="/img/maths.jpg" class="categoryVideo__img" alt="#">
                                <span class="categoryVideo__play"></span>
                                <span class="categoryVideo__class">7</span>
                            </a>
                            <h3 class="categoryVideo__title"><a href="#" class="categoryVideo__title-link">Физические величины и их измерения</a></h3>
                        </div>
                        <div class="categoryVideo categoryVideo--blue categoryVideo--small">
                            <a href="#" class="categoryVideo__imgContainer">
                                <img src="/img/maths.jpg" class="categoryVideo__img" alt="#">
                                <span class="categoryVideo__play"></span>
                                <span class="categoryVideo__class">7</span>
                            </a>
                            <h3 class="categoryVideo__title"><a href="#" class="categoryVideo__title-link">Физические величины и их измерения</a></h3>
                        </div>
                        <div class="categoryVideo categoryVideo--blue categoryVideo--small">
                            <a href="#" class="categoryVideo__imgContainer">
                                <img src="/img/maths.jpg" class="categoryVideo__img" alt="#">
                                <span class="categoryVideo__play"></span>
                                <span class="categoryVideo__class">7</span>
                            </a>
                            <h3 class="categoryVideo__title"><a href="#" class="categoryVideo__title-link">Физические величины и их измерения</a></h3>
                        </div>
                        <div class="categoryVideo categoryVideo--blue categoryVideo--small">
                            <a href="#" class="categoryVideo__imgContainer">
                                <img src="/img/maths.jpg" class="categoryVideo__img" alt="#">
                                <span class="categoryVideo__play"></span>
                                <span class="categoryVideo__class">7</span>
                            </a>
                            <h3 class="categoryVideo__title"><a href="#" class="categoryVideo__title-link">Физические величины и их измерения</a></h3>
                        </div>
                        <div class="categoryVideo categoryVideo--blue categoryVideo--small">
                            <a href="#" class="categoryVideo__imgContainer">
                                <img src="/img/maths.jpg" class="categoryVideo__img" alt="#">
                                <span class="categoryVideo__play"></span>
                                <span class="categoryVideo__class">7</span>
                            </a>
                            <h3 class="categoryVideo__title"><a href="#" class="categoryVideo__title-link">Физические величины и их измерения</a></h3>
                        </div>
                        <div class="categoryVideo categoryVideo--blue categoryVideo--small">
                            <a href="#" class="categoryVideo__imgContainer">
                                <img src="/img/maths.jpg" class="categoryVideo__img" alt="#">
                                <span class="categoryVideo__play"></span>
                                <span class="categoryVideo__class">7</span>
                            </a>
                            <h3 class="categoryVideo__title"><a href="#" class="categoryVideo__title-link">Физические величины и их измерения</a></h3>
                        </div>
                        <div class="categoryVideo categoryVideo--blue categoryVideo--small">
                            <a href="#" class="categoryVideo__imgContainer">
                                <img src="/img/maths.jpg" class="categoryVideo__img" alt="#">
                                <span class="categoryVideo__play"></span>
                                <span class="categoryVideo__class">7</span>
                            </a>
                            <h3 class="categoryVideo__title"><a href="#" class="categoryVideo__title-link">Физические величины и их измерения</a></h3>
                        </div>
                        <div class="categoryVideo categoryVideo--blue categoryVideo--small">
                            <a href="#" class="categoryVideo__imgContainer">
                                <img src="/img/maths.jpg" class="categoryVideo__img" alt="#">
                                <span class="categoryVideo__play"></span>
                                <span class="categoryVideo__class">7</span>
                            </a>
                            <h3 class="categoryVideo__title"><a href="#" class="categoryVideo__title-link">Физические величины и их измерения</a></h3>
                        </div>
                        <div class="categoryVideo categoryVideo--blue categoryVideo--small">
                            <a href="#" class="categoryVideo__imgContainer">
                                <img src="/img/maths.jpg" class="categoryVideo__img" alt="#">
                                <span class="categoryVideo__play"></span>
                                <span class="categoryVideo__class">7</span>
                            </a>
                            <h3 class="categoryVideo__title"><a href="#" class="categoryVideo__title-link">Физические величины и их измерения</a></h3>
                        </div>
                        <div class="categoryVideo categoryVideo--blue categoryVideo--small">
                            <a href="#" class="categoryVideo__imgContainer">
                                <img src="/img/maths.jpg" class="categoryVideo__img" alt="#">
                                <span class="categoryVideo__play"></span>
                                <span class="categoryVideo__class">7</span>
                            </a>
                            <h3 class="categoryVideo__title"><a href="#" class="categoryVideo__title-link">Физические величины и их измерения</a></h3>
                        </div>
                        <div class="categoryVideo categoryVideo--blue categoryVideo--small">
                            <a href="#" class="categoryVideo__imgContainer">
                                <img src="/img/maths.jpg" class="categoryVideo__img" alt="#">
                                <span class="categoryVideo__play"></span>
                                <span class="categoryVideo__class">7</span>
                            </a>
                            <h3 class="categoryVideo__title"><a href="#" class="categoryVideo__title-link">Физические величины и их измерения</a></h3>
                        </div>
                        <div class="categoryVideo categoryVideo--blue categoryVideo--small">
                            <a href="#" class="categoryVideo__imgContainer">
                                <img src="/img/maths.jpg" class="categoryVideo__img" alt="#">
                                <span class="categoryVideo__play"></span>
                                <span class="categoryVideo__class">7</span>
                            </a>
                            <h3 class="categoryVideo__title"><a href="#" class="categoryVideo__title-link">Физические величины и их измерения</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-3 d-lg-block d-none">
                    <div class="row smallVideos">
                        <div class="col-xl-6">
                            <div class="categoryVideo categoryVideo--blue categoryVideo--small">
                                <a href="#" class="categoryVideo__imgContainer">
                                    <img src="/img/maths.jpg" class="categoryVideo__img" alt="#">
                                    <span class="categoryVideo__play"></span>
                                    <span class="categoryVideo__class">7</span>
                                </a>
                                <h3 class="categoryVideo__title"><a href="#" class="categoryVideo__title-link">Физические величины и их измерения</a></h3>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="categoryVideo categoryVideo--blue categoryVideo--small">
                                <a href="#" class="categoryVideo__imgContainer">
                                    <img src="/img/maths.jpg" class="categoryVideo__img" alt="#">
                                    <span class="categoryVideo__play"></span>
                                    <span class="categoryVideo__number">#13</span>
                                </a>
                                <h3 class="categoryVideo__title"><a href="#" class="categoryVideo__title-link">Физические величины и их измерения</a></h3>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="categoryVideo categoryVideo--blue categoryVideo--small">
                                <a href="#" class="categoryVideo__imgContainer">
                                    <img src="/img/maths.jpg" class="categoryVideo__img" alt="#">
                                    <span class="categoryVideo__play"></span>
                                    <span class="categoryVideo__class">7</span>
                                </a>
                                <h3 class="categoryVideo__title"><a href="#" class="categoryVideo__title-link">Физические величины и их измерения</a></h3>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="categoryVideo categoryVideo--blue categoryVideo--small">
                                <a href="#" class="categoryVideo__imgContainer">
                                    <img src="/img/maths.jpg" class="categoryVideo__img" alt="#">
                                    <span class="categoryVideo__play"></span>
                                    <span class="categoryVideo__class">7</span>
                                </a>
                                <h3 class="categoryVideo__title"><a href="#" class="categoryVideo__title-link">Физические величины и их измерения</a></h3>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="categoryVideo categoryVideo--blue categoryVideo--small">
                                <a href="#" class="categoryVideo__imgContainer">
                                    <img src="/img/maths.jpg" class="categoryVideo__img" alt="#">
                                    <span class="categoryVideo__play"></span>
                                    <span class="categoryVideo__class">7</span>
                                </a>
                                <h3 class="categoryVideo__title"><a href="#" class="categoryVideo__title-link">Физические величины и их измерения</a></h3>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="categoryVideo categoryVideo--blue categoryVideo--small">
                                <a href="#" class="categoryVideo__imgContainer">
                                    <img src="/img/maths.jpg" class="categoryVideo__img" alt="#">
                                    <span class="categoryVideo__play"></span>
                                    <span class="categoryVideo__class">7</span>
                                </a>
                                <h3 class="categoryVideo__title"><a href="#" class="categoryVideo__title-link">Физические величины и их измерения</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
