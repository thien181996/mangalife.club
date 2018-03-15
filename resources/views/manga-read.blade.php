@extends('layout')
@section('css')
    <link href="{{ asset('pages/css/detail-main.css') }}" rel="stylesheet" type="text/css"/>
    <style>
        .section-read-manga {
            width: calc(100% - 10px);
            padding-right: 5px;
            padding-left: 5px;
        }

        .chapter {
            width: 100%;
            margin: 0 auto;
        }

        .chapter-navigation {
            width: 100%;

        }

        .chapter-navigation .form-group {
            margin: 0 auto;
        }

        .chapter-navigation .form-control {
            width: calc(100% - 90px);
            border-radius: 0;
            height: 35px;
            border-color: #DB0008;
        }

        @media (min-width: 768px) {
            .chapter-navigation .form-control {
                width: calc(100% - 90px);
                border-radius: 0;
                height: 35px;
            }

            .chapter-navigation {
                padding: 0 30%;
            }
        }

        .btn-login {
            background: #f40009;
            border-color: transparent;
            border-radius: 0;
            color: white;
            font-family: 'Roboto';
        }

        .chapter-navigation .btn-primary {
            font-family: 'Roboto';
        }

        .chapter-navigation button {
            width: 45px;
        }

        .chapter-navigation select {
            text-align-last: center;
        }

        img {
            max-width: 100%;
            height: auto !important;
            display: block;
            vertical-align: middle;
            margin: 2px auto;
        }

        .nav-fixed {
            overflow: hidden;
            position: fixed;
            top: 5px;
            opacity: 0.3;
        }

        .nav-fixed:hover {
            transition: 0.3s;
            opacity: 1;
        }
    </style>
@endsection
@section('content')
    <div class="section-breadcrumb">
        <div class="container">
            <div class="row">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                        <li class="breadcrumb-item"><a href="#">Dragon Ball</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Chapter 1</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="section-read-manga">
        <div class="container-fluid">
            <div class="row">
                <div class="chapter-navigation">
                    <div class="form-group">
                        <button class="btn btn-login pull-left"><span class="fa fa-chevron-circle-left"></span>
                        </button>
                        <select class="form-control pull-left">
                            <option selected>-- Chọn chương --</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                        <button class="btn btn-login pull-left"><span class="fa fa-chevron-circle-right"></span>
                        </button>
                    </div>

                </div>

            </div>
            <div class="row">
                <div class="chapter">

                    <img src="{{asset('pages/images/000-4.jpg')}}" alt="">

                    <img src="{{asset('pages/images/005.jpg')}}" alt="">

                    <img src="{{asset('pages/images/006.jpg')}}" alt="">

                    <img src="{{asset('pages/images/008-009.jpg')}}" alt="">

                    <img src="{{asset('pages/images/010.jpg')}}" alt="">

                    <img src="{{asset('pages/images/011.jpg')}}" alt="">

                    <img src="{{asset('pages/images/012.jpg')}}" alt="">

                    <img src="{{asset('pages/images/013.jpg')}}" alt="">

                    <img src="{{asset('pages/images/014-015.jpg')}}" alt="">

                    <img src="{{asset('pages/images/016.jpg')}}" alt="">

                    <img src="{{asset('pages/images/017.jpg')}}" alt="">

                    <img src="{{asset('pages/images/018.jpg')}}" alt="">

                    <img src="{{asset('pages/images/019.jpg')}}" alt="">

                    <img src="{{asset('pages/images/020.jpg')}}" alt="">

                    <img src="{{asset('pages/images/021.jpg')}}" alt="">

                    <img src="{{asset('pages/images/022.jpg')}}" alt="">

                    <img src="{{asset('pages/images/023.jpg')}}" alt="">

                    <img src="{{asset('pages/images/024.jpg')}}" alt="">

                    <img src="{{asset('pages/images/025.jpg')}}" alt="">

                    <img src="{{asset('pages/images/026.jpg')}}" alt="">

                    <img src="{{asset('pages/images/027.jpg')}}" alt="">

                    <img src="{{asset('pages/images/028.jpg')}}" alt="">

                    <img src="{{asset('pages/images/029.jpg')}}" alt="">

                    <img src="{{asset('pages/images/030.jpg')}}" alt="">

                    <img src="{{asset('pages/images/031.jpg')}}" alt="">

                    <img src="{{asset('pages/images/032.jpg')}}" alt="">

                    <img src="{{asset('pages/images/034-035.jpg')}}" alt="">

                </div>
            </div>

        </div>
    </div>
    <div class="section-list-chapter-manga" style="padding-top: 10px">
        <div class="container">
            <div class="row">
                <ul class="list-unstyled">
                    <li>
                        <h2 class="heading-title">
                            Bình luận
                        </h2>
                    </li>
                    <li>
                        <hr>
                    </li>
                    <li class="media">
                        <img class="mr-3" src="{{asset('pages/images/re-life.jpg')}}"
                             alt="Generic placeholder image" style="width:35px;height: 35px;">
                        <div class="media-body" style="font-size:12px">
                            <h6 class="mt-0">Sun Lord Đẹp Trai</h6>
                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque
                            ante
                            sollicitudin.
                        </div>
                    </li>
                    <li class="media">
                        <img class="mr-3" src="{{asset('pages/images/re-life.jpg')}}"
                             alt="Generic placeholder image" style="width:35px;height: 35px;">
                        <div class="media-body" style="font-size:12px">
                            <h6 class="mt-0">Thiện Phan Ngố</h6>
                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque
                            ante
                            sollicitudin.
                        </div>
                    </li>
                    <li class="media">
                        <img class="mr-3" src="{{asset('pages/images/re-life.jpg')}}"
                             alt="Generic placeholder image" style="width:35px;height: 35px;">
                        <div class="media-body" style="font-size:12px">
                            <h6 class="mt-0">Tiến tiền tỷ</h6>
                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque
                            ante
                            sollicitudin.
                        </div>
                    </li>
                    <li class="media">
                        <img class="mr-3" src="{{asset('pages/images/re-life.jpg')}}"
                             alt="Generic placeholder image" style="width:35px;height: 35px;">
                        <div class="media-body" style="font-size:12px">
                            <h6 class="mt-0">Hùng dát vàng</h6>
                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque
                            ante
                            sollicitudin.
                        </div>
                    </li>
                    <li class="media">
                        <img class="mr-3" src="{{asset('pages/images/re-life.jpg')}}"
                             alt="Generic placeholder image" style="width:35px;height: 35px;">
                        <div class="media-body" style="font-size:12px">
                            <form>
                                <div class="form-group">
                                                <textarea class="form-control" id="exampleFormControlTextarea1"
                                                          rows="3" placeholder="Bình luận vào đây..."></textarea>
                                </div>
                                <button type="submit" class="btn btn-login pull-right"
                                        style="font-family: 'Roboto';   ">Gửi bình luận
                                </button>
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

@endsection
@section('js')
    <script>
        window.addEventListener('scroll', function (e) {
            if (window.scrollY > 150) {
                document.querySelector(".chapter-navigation").setAttribute("class", "chapter-navigation nav-fixed");
            } else {
                document.querySelector(".chapter-navigation").setAttribute("class", "chapter-navigation");
            }
        });
    </script>
@endsection


