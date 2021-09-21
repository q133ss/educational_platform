<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title_page')</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" integrity="sha512-P5MgMn1jBN01asBgU0z60Qk4QxiXo86+wlFahKrsQf37c9cro517WzVSPPV1tDKzhku2iJ2FVgL67wG03SGnNA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://vjs.zencdn.net/7.14.3/video-js.css" rel="stylesheet" />


    <link rel="stylesheet" href="/styles/main.css">
</head>
<body>
<main class="page-wrapper">


    <div class="menuBG"></div>
    <header class="header">
        <div class="container">
            <div class="header__wrapper">
                <div href="#" class="header__logoContainer">
                    <a href="#" class="header__logo"><img src="/img/logo.svg" class="header__logo-img" alt="#"></a>
                    <span class="header__logoText">
                  <span class="header__logoText-title">МЫ ДАРИМ ЗНАНИЯ!</span>
                  <span class="header__logoText-text">Образовательный проект</span>
                </span>
                </div>
                <a href="#" class="header__banner"><img src="/img/banner.png" class="header__banner-img" alt="#"></a>
                <div class="header__right">
                    <div class="socials">
                        <p class="socials__title">Мы в соц. сетях</p>
                        <ul class="socials__list">
                            <li class="socials__list-el">
                                <a href="#" class="socials__list-link">
                                    <img src="/img/icons/youtube.svg" class="socials__list-img" alt="#">
                                </a>
                            </li>
                            <li class="socials__list-el">
                                <a href="#" class="socials__list-link">
                                    <img src="/img/icons/insta.svg" class="socials__list-img" alt="#">
                                </a>
                            </li>
                            <li class="socials__list-el">
                                <a href="#" class="socials__list-link">
                                    <img src="/img/icons/tg.svg" class="socials__list-img" alt="#">
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="languageList">
                        <div class="dropdown">
                            <button class="dropdown__toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Рус</button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item active" href="#">Рус</a>
                                <a class="dropdown-item" href="#">Kaz</a>
                                <a class="dropdown-item" href="#">Eng</a>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="header__toggle" type="button">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>


            <form class="searchForm" action="{{route('search')}}" method="GET">
                <button type="submit" class="searchForm__button"></button>
                <input type="text" id="s" name="search" class="searchForm__input" placeholder="Поиск уроков..." required>
            </form>
            <button class="catalogToggle" type="button">
              <span class="catalogToggle__bar">
                <span></span>
                <span></span>
                <span></span>
              </span>
                <span class="catalogToggle__text">Каталог знаний</span>
            </button>
        </div>
    </header>
{{-- Categories --}}
    <div class="categoriesList">
        <div class="container">
            <button class="categoriesList__toggle" type="button"></button>
            <div class="categoriesList__inner">

                @foreach($categories as $cat)
                <div class="categoriesList__el categoriesList__el--turquoise categoriesList__el--biology">
                    <div class="dropdown">
                        <button class="dropdown__toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="dropdown__toggle-title">{{$cat->title}}</span>
                        </button>
                        <div class="dropdown-menu">
                            @foreach($groups as $group)
                            <a class="dropdown-item active" href="{{route('themes', [$cat->title, $group->number])}}">{{$group->number}} класс</a>
                            @endforeach
                        </div>
                    </div>
                </div>
                @endforeach


                <div class="categoriesList__el categoriesList__el--turquoise categoriesList__el--biology">
                    <div class="dropdown">
                        <button class="dropdown__toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="dropdown__toggle-title">Биология</span>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item active" href="#">7 класс</a>
                            <a class="dropdown-item" href="#">8 класс</a>
                            <a class="dropdown-item" href="#">9 класс</a>
                            <a class="dropdown-item" href="#">10 класс</a>
                            <a class="dropdown-item" href="#">11 класс</a>
                            <a class="dropdown-item" href="#">12 класс</a>
                        </div>
                    </div>
                </div>
                <div class="categoriesList__el  categoriesList__el--red categoriesList__el--maths">
                    <div class="dropdown">
                        <button class="dropdown__toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="dropdown__toggle-title">Математика</span>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">7 класс</a>
                            <a class="dropdown-item" href="#">8 класс</a>
                            <a class="dropdown-item" href="#">9 класс</a>
                        </div>
                    </div>
                </div>
                <div class="categoriesList__el categoriesList__el--violet categoriesList__el--chemistry">
                    <div class="dropdown">
                        <button class="dropdown__toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="dropdown__toggle-title">Химия</span>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">7 класс</a>
                            <a class="dropdown-item" href="#">8 класс</a>
                            <a class="dropdown-item" href="#">9 класс</a>
                        </div>
                    </div>
                </div>
                <div class="categoriesList__el  categoriesList__el--blue categoriesList__el--physics">
                    <div class="dropdown">
                        <button class="dropdown__toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="dropdown__toggle-title">Физика</span>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">7 класс</a>
                            <a class="dropdown-item" href="#">8 класс</a>
                            <a class="dropdown-item" href="#">9 класс</a>
                        </div>
                    </div>
                </div>
                <div class="categoriesList__el categoriesList__el--pink categoriesList__el--algebra">
                    <div class="dropdown">
                        <button class="dropdown__toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="dropdown__toggle-title">Алгебра</span>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">7 класс</a>
                            <a class="dropdown-item" href="#">8 класс</a>
                            <a class="dropdown-item" href="#">9 класс</a>
                        </div>
                    </div>
                </div>
                <div class="categoriesList__el  categoriesList__el--orange categoriesList__el--geometry">
                    <div class="dropdown">
                        <button class="dropdown__toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="dropdown__toggle-title">Геометрия</span>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">7 класс</a>
                            <a class="dropdown-item" href="#">8 класс</a>
                            <a class="dropdown-item" href="#">9 класс</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="categoriesList__submenu">
                <div class="languageList">
                    <div class="languageList__title">Язык</div>
                    <div class="dropdown">
                        <div class="dropdown-menu">
                            <a class="dropdown-item active" href="#">Рус</a>
                            <a class="dropdown-item" href="#">Kaz</a>
                            <a class="dropdown-item" href="#">Eng</a>
                        </div>
                    </div>
                </div>
                <div class="socials">
                    <p class="socials__title">Мы в соц. сетях</p>
                    <ul class="socials__list">
                        <li class="socials__list-el">
                            <a href="#" class="socials__list-link">
                                <img src="/img/icons/youtube.svg" class="socials__list-img" alt="#">
                            </a>
                        </li>
                        <li class="socials__list-el">
                            <a href="#" class="socials__list-link">
                                <img src="/img/icons/insta.svg" class="socials__list-img" alt="#">
                            </a>
                        </li>
                        <li class="socials__list-el">
                            <a href="#" class="socials__list-link">
                                <img src="/img/icons/tg.svg" class="socials__list-img" alt="#">
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
