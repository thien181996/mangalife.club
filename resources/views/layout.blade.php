<!DOCTYPE html>
<html>

<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="copyright" content="MangaLife">
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

    <link href="{{ asset('pages/css/main.css') }}" rel="stylesheet" type="text/css"/>
    @yield('css')


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
                    <form class="form-inline manga-search-merge pull-left">
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
    @yield('content')
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

@yield('js')

</body>

</html>