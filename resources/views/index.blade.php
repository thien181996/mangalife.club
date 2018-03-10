<!DOCTYPE html>
<html>

<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>relevant and attractive phrase </title>
    <meta name="description" content="text">
    <meta name="keywords" content="words">
    <meta name="copyright" content="text">
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Poppins:300,400,500,600,700", "Roboto:300,400,500,600,700"]
            },
            active: function () {
                sessionStorage.fonts = true;
            }
        });
    </script>
    <!--end::Web font -->
    <!--begin::Base Styles -->
    <!--begin::Page Vendors -->
    <link href="{{ asset('assets/vendors/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet"
          type="text/css"/>
    <!--end::Page Vendors -->
    <link href="{{ asset('assets/vendors/base/vendors.bundle.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/demo/default/base/style.bundle.css') }}" rel="stylesheet" type="text/css"/>
    <link rel="shortcut icon" href="{{ asset('assets/demo/default/media/img/logo/favicon.ico') }}"/>
    <!--end::Base Styles -->

    <!-- ::Custom Style -->
    <link href="{{ asset('pages/css/main.css') }}" rel="stylesheet" type="text/css"/>
    {{--swiper here--}}
    <link href="{{ asset('pages/libs/swiper/css/swiper.min.css') }}" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="{{ asset('pages/libs/swiper/css/custom-slider.css') }}">
{{--end swiper here--}}
<!-- ::end Custom Style -->

</head>
<body>
<header id="header">
    <div class="section-navigation">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark bg-theme">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('pages/images/logo.png') }}" width="200">
                </a>
                <div class="notify">

                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        {{--<li class="nav-item active">--}}
                        {{--<a class="nav-link" href="#">Đăng nhập / Đăng ký <span class="sr-only">(current)</span></a>--}}
                        {{--</li>--}}
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Đăng nhập</a>
                        </li>
                        <li class="dropdown menu-large nav-item"><a href="#" class="dropdown-toggle nav-link"
                                                                    data-toggle="dropdown"> Thể loại </a>
                            <ul class="dropdown-menu megamenu">
                                <li class="dropdown-item">
                                    <div class="row">
                                        <div class="col-md-6 col-lg-3 text-center">
                                            <div class="card">
                                                <a href="#" class="thumbnail">
                                                    <img src="http://placehold.it/150x120">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3 text-center">
                                            <div class="card">
                                                <a href="#" class="thumbnail">
                                                    <img src="http://placehold.it/150x120">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3 text-center">
                                            <div class="card">
                                                <a href="#" class="thumbnail">
                                                    <img src="http://placehold.it/150x120">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3 text-center">
                                            <div class="card">
                                                <a href="#" class="thumbnail">
                                                    <img src="http://placehold.it/150x120">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Nhóm dịch</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">List truyện</a>
                        </li>
                        {{--<li class="nav-item">--}}
                        {{--<a class="nav-link disabled" href="#">Disabled</a>--}}
                        {{--</li>--}}

                    </ul>
                    <form class="form-inline manga-search-merge pull-right">
                        <span class="fa fa-search manga-search-submit"></span>
                        <input class="form-control mr-sm-2 manga-search" type="search"
                               aria-label="Search">
                    </form>

                </div>
            </nav>
        </div>

    </div>

</header>

<main>

    <div class="section-slider">
        <div class="container">
            <div class="row">
                <h2 class="heading-title">Truyện đề cử</h2>

                <!-- Slider main container -->
                <div class="swiper-container">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <div class="img-merge">
                                <img src="{{asset('pages/images/naruto.jpg')}}" alt="" class="full-width">

                            </div>
                            <div class="section-padding">
                                <div class="item-title">
                                    <a href="#" class="item-link"
                                       title="one piece one pieceone piece one pieceonepiece pieceone piece one pieceone piece one pieceone piece one pieceone piece oneiece one pieceone piece one">
                                        pieceonepiecezzone pieceone pieceonene piece one pieceone piece one
                                        pieceone
                                        piece onepiece</a>
                                    <br>
                                    <a href="#" class="item-chapter-link"
                                       title="one piece one pieceone piece one pieceonepiece pieceone piec">Chapter
                                        1: </a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="img-merge">
                                <img src="{{asset('pages/images/one-piece.jpg')}}" alt="" class="full-width">

                            </div>
                            <div class="section-padding">
                                <div class="item-title">
                                    <a href="#" class="item-link"
                                       title="one piece one pieceone piece one pieceonepiece pieceone piece one pieceone piece one pieceone piece one pieceone piece oneiece one pieceone piece one">
                                        pieceonepiecezzone pieceone pieceonene piece one pieceone piece one
                                        pieceone
                                        piece onepiece</a>
                                    <br>
                                    <a href="#" class="item-chapter-link"
                                       title="one piece one pieceone piece one pieceonepiece pieceone piec">Chapter
                                        1: </a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="img-merge">
                                <img src="{{asset('pages/images/naruto.jpg')}}" alt="" class="full-width">

                            </div>
                            <div class="section-padding">
                                <div class="item-title">
                                    <a href="#" class="item-link"
                                       title="one piece one pieceone piece one pieceonepiece pieceone piece one pieceone piece one pieceone piece one pieceone piece oneiece one pieceone piece one">
                                        pieceonepiecezzone pieceone pieceonene piece one pieceone piece one
                                        pieceone
                                        piece onepiece</a>
                                    <br>
                                    <a href="#" class="item-chapter-link"
                                       title="one piece one pieceone piece one pieceonepiece pieceone piec">Chapter
                                        1: </a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="img-merge">
                                <img src="{{asset('pages/images/one-piece.jpg')}}" alt="" class="full-width">

                            </div>
                            <div class="section-padding">
                                <div class="item-title">
                                    <a href="#" class="item-link"
                                       title="one piece one pieceone piece one pieceonepiece pieceone piece one pieceone piece one pieceone piece one pieceone piece oneiece one pieceone piece one">
                                        pieceonepiecezzone pieceone pieceonene piece one pieceone piece one
                                        pieceone
                                        piece onepiece</a>
                                    <br>
                                    <a href="#" class="item-chapter-link"
                                       title="one piece one pieceone piece one pieceonepiece pieceone piec">Chapter
                                        1: </a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="img-merge">
                                <img src="{{asset('pages/images/naruto.jpg')}}" alt="" class="full-width">

                            </div>
                            <div class="section-padding">
                                <div class="item-title">
                                    <a href="#" class="item-link"
                                       title="one piece one pieceone piece one pieceonepiece pieceone piece one pieceone piece one pieceone piece one pieceone piece oneiece one pieceone piece one">
                                        pieceonepiecezzone pieceone pieceonene piece one pieceone piece one
                                        pieceone
                                        piece onepiece</a>
                                    <br>
                                    <a href="#" class="item-chapter-link"
                                       title="one piece one pieceone piece one pieceonepiece pieceone piec">Chapter
                                        1: </a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="img-merge">
                                <img src="{{asset('pages/images/one-piece.jpg')}}" alt="" class="full-width">

                            </div>
                            <div class="section-padding">
                                <div class="item-title">
                                    <a href="#" class="item-link"
                                       title="one piece one pieceone piece one pieceonepiece pieceone piece one pieceone piece one pieceone piece one pieceone piece oneiece one pieceone piece one">
                                        pieceonepiecezzone pieceone pieceonene piece one pieceone piece one
                                        pieceone
                                        piece onepiece</a>
                                    <br>
                                    <a href="#" class="item-chapter-link"
                                       title="one piece one pieceone piece one pieceonepiece pieceone piec">Chapter
                                        1: </a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="img-merge">
                                <img src="{{asset('pages/images/naruto.jpg')}}" alt="" class="full-width">

                            </div>
                            <div class="section-padding">
                                <div class="item-title">
                                    <a href="#" class="item-link"
                                       title="one piece one pieceone piece one pieceonepiece pieceone piece one pieceone piece one pieceone piece one pieceone piece oneiece one pieceone piece one">
                                        pieceonepiecezzone pieceone pieceonene piece one pieceone piece one
                                        pieceone
                                        piece onepiece</a>
                                    <br>
                                    <a href="#" class="item-chapter-link"
                                       title="one piece one pieceone piece one pieceonepiece pieceone piec">Chapter
                                        1: </a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="img-merge">
                                <img src="{{asset('pages/images/one-piece.jpg')}}" alt="" class="full-width">

                            </div>

                            <div class="section-padding">
                                <div class="item-title">
                                    <a href="#" class="item-link"
                                       title="one piece one pieceone piece one pieceonepiece pieceone piece one pieceone piece one pieceone piece one pieceone piece oneiece one pieceone piece one">
                                        pieceonepiecezzone pieceone pieceonene piece one pieceone piece one
                                        pieceone
                                        piece onepiece</a>
                                    <br>
                                    <a href="#" class="item-chapter-link"
                                       title="one piece one pieceone piece one pieceonepiece pieceone piec">Chapter
                                        1: </a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="img-merge">
                                <img src="{{asset('pages/images/naruto.jpg')}}" alt="" class="full-width">

                            </div>

                            <div class="section-padding">
                                <div class="item-title">
                                    <a href="#" class="item-link"
                                       title="one piece one pieceone piece one pieceonepiece pieceone piece one pieceone piece one pieceone piece one pieceone piece oneiece one pieceone piece one">
                                        pieceonepiecezzone pieceone pieceonene piece one pieceone piece one
                                        pieceone
                                        piece onepiece</a>
                                    <br>
                                    <a href="#" class="item-chapter-link"
                                       title="one piece one pieceone piece one pieceonepiece pieceone piec">Chapter
                                        1: </a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="img-merge">
                                <img src="{{asset('pages/images/one-piece.jpg')}}" alt="" class="full-width">

                            </div>
                            <div class="section-padding">
                                <div class="item-title">
                                    <a href="#" class="item-link"
                                       title="one piece one pieceone piece one pieceonepiece pieceone piece one pieceone piece one pieceone piece one pieceone piece oneiece one pieceone piece one">
                                        pieceonepiecezzone pieceone pieceonene piece one pieceone piece one
                                        pieceone
                                        piece onepiece</a>
                                    <br>
                                    <a href="#" class="item-chapter-link"
                                       title="one piece one pieceone piece one pieceonepiece pieceone piec">Chapter
                                        1: </a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="img-merge">
                                <img src="{{asset('pages/images/naruto.jpg')}}" alt="" class="full-width">

                            </div>
                            <div class="section-padding">
                                <div class="item-title">
                                    <a href="#" class="item-link"
                                       title="one piece one pieceone piece one pieceonepiece pieceone piece one pieceone piece one pieceone piece one pieceone piece oneiece one pieceone piece one">
                                        pieceonepiecezzone pieceone pieceonene piece one pieceone piece one
                                        pieceone
                                        piece onepiece</a>
                                    <br>
                                    <a href="#" class="item-chapter-link"
                                       title="one piece one pieceone piece one pieceonepiece pieceone piec">Chapter
                                        1: </a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="img-merge">
                                <img src="{{asset('pages/images/one-piece.jpg')}}" alt="" class="full-width">

                            </div>
                            <div class="section-padding">
                                <div class="item-title">
                                    <a href="#" class="item-link"
                                       title="one piece one pieceone piece one pieceonepiece pieceone piece one pieceone piece one pieceone piece one pieceone piece oneiece one pieceone piece one">
                                        pieceonepiecezzone pieceone pieceonene piece one pieceone piece one
                                        pieceone
                                        piece onepiece</a>
                                    <br>
                                    <a href="#" class="item-chapter-link"
                                       title="one piece one pieceone piece one pieceonepiece pieceone piec">Chapter
                                        1: </a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="img-merge">
                                <img src="{{asset('pages/images/naruto.jpg')}}" alt="" class="full-width">

                            </div>
                            <div class="section-padding">
                                <div class="item-title">
                                    <a href="#" class="item-link"
                                       title="one piece one pieceone piece one pieceonepiece pieceone piece one pieceone piece one pieceone piece one pieceone piece oneiece one pieceone piece one">
                                        pieceonepiecezzone pieceone pieceonene piece one pieceone piece one
                                        pieceone
                                        piece onepiece</a>
                                    <br>
                                    <a href="#" class="item-chapter-link"
                                       title="one piece one pieceone piece one pieceonepiece pieceone piec">Chapter
                                        1: </a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="img-merge">
                                <img src="{{asset('pages/images/one-piece.jpg')}}" alt="" class="full-width">

                            </div>
                            <div class="section-padding">
                                <div class="item-title">
                                    <a href="#" class="item-link"
                                       title="one piece one pieceone piece one pieceonepiece pieceone piece one pieceone piece one pieceone piece one pieceone piece oneiece one pieceone piece one">
                                        pieceonepiecezzone pieceone pieceonene piece one pieceone piece one
                                        pieceone
                                        piece onepiece</a>
                                    <br>
                                    <a href="#" class="item-chapter-link"
                                       title="one piece one pieceone piece one pieceonepiece pieceone piec">Chapter
                                        1: </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- If we need pagination -->
                    <div class="swiper-pagination"></div>

                    <!-- If we need navigation buttons -->
                    {{--<div class="swiper-button-prev"></div>--}}
                    {{--<div class="swiper-button-next"></div>--}}

                    {{--<!-- If we need scrollbar -->--}}
                    {{--<div class="swiper-scrollbar"></div>--}}
                </div>
            </div>
        </div>
    </div>

    <div class="section-manga-new">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="section-manga-new-content">
                        <h2 class="heading-title">Truyện mới cập nhập</h2>
                        <div class=" row">
                            <div class="col-md-3 col-6">
                                <div class="item">
                                    <img src="{{asset('pages/images/naruto.jpg')}}" alt="" class="item-img-width">
                                    <div class="section-padding">
                                        <div class="item-title">
                                            <a href="#" class="item-link"
                                               title="one piece one pieceone piece one pieceonepiece pieceone piece one pieceone piece one pieceone piece one pieceone piece oneiece one pieceone piece one">
                                                Boruto Boruto Boruto BorutoBorutoBorutovBorutoBorutoBoruto</a>
                                            <br>
                                            <a href="#" class="item-chapter-link"
                                               title="one piece one pieceone piece one pieceonepiece pieceone piec">Chapter
                                                1</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="item">
                                    <img src="{{asset('pages/images/one-piece.jpg')}}" alt="" class="item-img-width">
                                    <div class="section-padding">
                                        <div class="item-title">
                                            <a href="#" class="item-link"
                                               title="one piece">One Piece</a>
                                            <br>
                                            <a href="#" class="item-chapter-link"
                                               title="Chapter 1">Chapter 1: Chapter 1: Chapter 1: Chapter 1: Chapter 1:
                                                Chapter 1: Chapter 1: Chapter 1: Chapter 1: </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="item">
                                    <img src="{{asset('pages/images/naruto.jpg')}}" alt="" class="item-img-width">
                                    <div class="section-padding">
                                        <div class="item-title">
                                            <a href="#" class="item-link"
                                               title="one piece one pieceone piece one pieceonepiece pieceone piece one pieceone piece one pieceone piece one pieceone piece oneiece one pieceone piece one">
                                                Boruto Boruto Boruto BorutoBorutoBorutovBorutoBorutoBoruto</a>
                                            <br>
                                            <a href="#" class="item-chapter-link"
                                               title="one piece one pieceone piece one pieceonepiece pieceone piec">Chapter
                                                1</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="item">
                                    <img src="{{asset('pages/images/one-piece.jpg')}}" alt="" class="item-img-width">
                                    <div class="section-padding">
                                        <div class="item-title">
                                            <a href="#" class="item-link"
                                               title="one piece">One Piece</a>
                                            <br>
                                            <a href="#" class="item-chapter-link"
                                               title="Chapter 1">Chapter 1: Chapter 1: Chapter 1: Chapter 1: Chapter 1:
                                                Chapter 1: Chapter 1: Chapter 1: Chapter 1: </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="item">
                                    <img src="{{asset('pages/images/naruto.jpg')}}" alt="" class="item-img-width">
                                    <div class="section-padding">
                                        <div class="item-title">
                                            <a href="#" class="item-link"
                                               title="one piece one pieceone piece one pieceonepiece pieceone piece one pieceone piece one pieceone piece one pieceone piece oneiece one pieceone piece one">
                                                Boruto Boruto Boruto BorutoBorutoBorutovBorutoBorutoBoruto</a>
                                            <br>
                                            <a href="#" class="item-chapter-link"
                                               title="one piece one pieceone piece one pieceonepiece pieceone piec">Chapter
                                                1</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="item">
                                    <img src="{{asset('pages/images/one-piece.jpg')}}" alt="" class="item-img-width">
                                    <div class="section-padding">
                                        <div class="item-title">
                                            <a href="#" class="item-link"
                                               title="one piece">One Piece</a>
                                            <br>
                                            <a href="#" class="item-chapter-link"
                                               title="Chapter 1">Chapter 1: Chapter 1: Chapter 1: Chapter 1: Chapter 1:
                                                Chapter 1: Chapter 1: Chapter 1: Chapter 1: </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="item">
                                    <img src="{{asset('pages/images/naruto.jpg')}}" alt="" class="item-img-width">
                                    <div class="section-padding">
                                        <div class="item-title">
                                            <a href="#" class="item-link"
                                               title="one piece one pieceone piece one pieceonepiece pieceone piece one pieceone piece one pieceone piece one pieceone piece oneiece one pieceone piece one">
                                                Boruto Boruto Boruto BorutoBorutoBorutovBorutoBorutoBoruto</a>
                                            <br>
                                            <a href="#" class="item-chapter-link"
                                               title="one piece one pieceone piece one pieceonepiece pieceone piec">Chapter
                                                1</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="item">
                                    <img src="{{asset('pages/images/one-piece.jpg')}}" alt="" class="item-img-width">
                                    <div class="section-padding">
                                        <div class="item-title">
                                            <a href="#" class="item-link"
                                               title="one piece">One Piece</a>
                                            <br>
                                            <a href="#" class="item-chapter-link"
                                               title="Chapter 1">Chapter 1: Chapter 1: Chapter 1: Chapter 1: Chapter 1:
                                                Chapter 1: Chapter 1: Chapter 1: Chapter 1: </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="item">
                                    <img src="{{asset('pages/images/naruto.jpg')}}" alt="" class="item-img-width">
                                    <div class="section-padding">
                                        <div class="item-title">
                                            <a href="#" class="item-link"
                                               title="one piece one pieceone piece one pieceonepiece pieceone piece one pieceone piece one pieceone piece one pieceone piece oneiece one pieceone piece one">
                                                Boruto Boruto Boruto BorutoBorutoBorutovBorutoBorutoBoruto</a>
                                            <br>
                                            <a href="#" class="item-chapter-link"
                                               title="one piece one pieceone piece one pieceonepiece pieceone piec">Chapter
                                                1</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="item">
                                    <img src="{{asset('pages/images/one-piece.jpg')}}" alt="" class="item-img-width">
                                    <div class="section-padding">
                                        <div class="item-title">
                                            <a href="#" class="item-link"
                                               title="one piece">One Piece</a>
                                            <br>
                                            <a href="#" class="item-chapter-link"
                                               title="Chapter 1">Chapter 1: Chapter 1: Chapter 1: Chapter 1: Chapter 1:
                                                Chapter 1: Chapter 1: Chapter 1: Chapter 1: </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="item">
                                    <img src="{{asset('pages/images/naruto.jpg')}}" alt="" class="item-img-width">
                                    <div class="section-padding">
                                        <div class="item-title">
                                            <a href="#" class="item-link"
                                               title="one piece one pieceone piece one pieceonepiece pieceone piece one pieceone piece one pieceone piece one pieceone piece oneiece one pieceone piece one">
                                                Boruto Boruto Boruto BorutoBorutoBorutovBorutoBorutoBoruto</a>
                                            <br>
                                            <a href="#" class="item-chapter-link"
                                               title="one piece one pieceone piece one pieceonepiece pieceone piec">Chapter
                                                1</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="item">
                                    <img src="{{asset('pages/images/one-piece.jpg')}}" alt="" class="item-img-width">
                                    <div class="section-padding">
                                        <div class="item-title">
                                            <a href="#" class="item-link"
                                               title="one piece">One Piece</a>
                                            <br>
                                            <a href="#" class="item-chapter-link"
                                               title="Chapter 1">Chapter 1: Chapter 1: Chapter 1: Chapter 1: Chapter 1:
                                                Chapter 1: Chapter 1: Chapter 1: Chapter 1: </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="section-manga-new-sidebar">
                        <h2 class="heading-title">Sidebar</h2>
                    </div>
                </div>
            </div>

        </div>
    </div>
</main>
<footer id="footer">
    <div class="section-copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <img src="{{ asset('pages/images/logo.png') }}" width="200">
                </div>
                <div class="col-md-9">
                    <p>© 2018 mangalife.club đọc truyện tranh online mới và truyện hay luôn cập nhật <br>
                        Trải nghiệm thế giới truyện tranh hoàn toàn miễn phí <br>
                        Liên hệ quảng cáo Email: thienpn@gmail.com</p>
                </div>
            </div>
        </div>
    </div>
</footer>

<!--begin::Base Scripts -->
<script src="{{ asset('assets/vendors/base/vendors.bundle.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/demo/default/base/scripts.bundle.js') }}" type="text/javascript"></script>
<!--end::Base Scripts -->
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
{{--Custom JS Here--}}

{{--Swiper Slider--}}
<script src="{{asset('pages/libs/swiper/js/swiper.min.js')}}" type="text/javascript"></script>
<script>
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 6,
        spaceBetween: 3,
        autoplay: {
            delay: 20000,
            disableOnInteraction: false,
        }, breakpoints: {
            1024: {
                slidesPerView: 6,
                spaceBetween: 40,
            },
            768: {
                slidesPerView: 5,
                spaceBetween: 30,
            },
            640: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            320: {
                slidesPerView: 2,
                spaceBetween: 10,
            }
        }
    });

</script>
{{--End Swiper Slider--}}
</body>

</html>