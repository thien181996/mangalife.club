<!DOCTYPE html>
<html>

<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no,user-scalable=no">
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
        <div class="container-fluid">
            <nav class="navbar navbar-expand-xl navbar-dark bg-dark bg-theme">
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

                <li class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">


                        <li class="dropdown menu-large nav-item"><a href="#" class="dropdown-toggle nav-link"
                                                                    data-toggle="dropdown"> Thể loại </a>
                            <ul class="dropdown-menu megamenu">
                                <li class="dropdown-item">
                                    <div class="row">
                                        <div class="col-6 col-md-2 type-manga"><a href="the-loai/the-loai-16-40.html">
                                                16+</a>
                                        </div>
                                        <div class="col-6 col-md-2 type-manga"><a
                                                    href="the-loai/the-loai-action-41.html">Action</a>
                                        </div>
                                        <div class="col-6 col-md-2 type-manga"><a
                                                    href="the-loai/the-loai-adventure-42.html">Adventure</a></div>
                                        <div class="col-6 col-md-2 type-manga"><a
                                                    href="the-loai/the-loai-award-winning-43.html">Award
                                                winning</a></div>
                                        <div class="col-6 col-md-2 type-manga"><a
                                                    href="the-loai/the-loai-comedy-44.html">Comedy</a>
                                        </div>
                                        <div class="col-6 col-md-2 type-manga"><a
                                                    href="the-loai/the-loai-comic-45.html">Comic</a></div>
                                        <div class="col-6 col-md-2 type-manga"><a
                                                    href="the-loai/the-loai-cooking-46.html">Cooking</a>
                                        </div>
                                        <div class="col-6 col-md-2 type-manga"><a
                                                    href="the-loai/the-loai-demons-47.html">Demons</a>
                                        </div>
                                        <div class="col-6 col-md-2 type-manga"><a
                                                    href="the-loai/the-loai-doujinshi-48.html">Doujinshi</a></div>
                                        <div class="col-6 col-md-2 type-manga"><a
                                                    href="the-loai/the-loai-drama-49.html">Drama</a></div>
                                        <div class="col-6 col-md-2 type-manga"><a
                                                    href="the-loai/the-loai-ecchi-50.html">Ecchi</a></div>
                                        <div class="col-6 col-md-2 type-manga"><a
                                                    href="the-loai/the-loai-fantasy-51.html">Fantasy</a>
                                        </div>
                                        <div class="col-6 col-md-2 type-manga"><a
                                                    href="the-loai/the-loai-gender-bender-52.html">Gender
                                                bender</a></div>
                                        <div class="col-6 col-md-2 type-manga"><a
                                                    href="the-loai/the-loai-giong-game-53.html">Giống
                                                game</a></div>
                                        <div class="col-6 col-md-2 type-manga"><a
                                                    href="the-loai/the-loai-hay-nhuc-nhoi-54.html">Hay Nhức
                                                Nhói</a></div>
                                        <div class="col-6 col-md-2 type-manga"><a
                                                    href="the-loai/the-loai-historical-55.html">Historical</a></div>
                                        <div class="col-6 col-md-2 type-manga"><a
                                                    href="the-loai/the-loai-horror-56.html">Horror</a>
                                        </div>
                                        <div class="col-6 col-md-2 type-manga"><a
                                                    href="the-loai/the-loai-huyen-huyen-57.html">Huyền
                                                Huyễn</a></div>
                                        <div class="col-6 col-md-2 type-manga"><a
                                                    href="the-loai/the-loai-magic-58.html">Magic</a></div>
                                        <div class="col-6 col-md-2 type-manga"><a
                                                    href="the-loai/the-loai-manga-59.html">Manga</a></div>
                                        <div class="col-6 col-md-2 type-manga"><a
                                                    href="the-loai/the-loai-manhua-60.html">Manhua</a>
                                        </div>
                                        <div class="col-6 col-md-2 type-manga"><a
                                                    href="the-loai/the-loai-manhwa-61.html">Manhwa</a>
                                        </div>
                                        <div class="col-6 col-md-2 type-manga"><a
                                                    href="the-loai/the-loai-martial-arts-62.html">
                                                Martial
                                                Arts</a></div>
                                        <div class="col-6 col-md-2 type-manga"><a
                                                    href="the-loai/the-loai-mature-63.html">Mature</a>
                                        </div>
                                        <div class="col-6 col-md-2 type-manga"><a
                                                    href="the-loai/the-loai-mecha-64.html">Mecha</a></div>
                                        <div class="col-6 col-md-2 type-manga"><a
                                                    href="the-loai/the-loai-medical-65.html">Medical</a>
                                        </div>
                                        <div class="col-6 col-md-2 type-manga"><a
                                                    href="the-loai/the-loai-military-66.html">Military</a>
                                        </div>
                                        <div class="col-6 col-md-2 type-manga"><a
                                                    href="the-loai/the-loai-music-67.html">Music</a></div>
                                        <div class="col-6 col-md-2 type-manga"><a
                                                    href="the-loai/the-loai-mystery-68.html">Mystery</a>
                                        </div>
                                        <div class="col-6 col-md-2 type-manga"><a
                                                    href="the-loai/the-loai-one-shot-69.html">One
                                                shot</a>
                                        </div>
                                        <div class="col-6 col-md-2 type-manga"><a
                                                    href="the-loai/the-loai-oneshot-70.html">Oneshot</a>
                                        </div>
                                        <div class="col-6 col-md-2 type-manga"><a
                                                    href="the-loai/the-loai-psychological-71.html">Psychological</a>
                                        </div>
                                        <div class="col-6 col-md-2 type-manga"><a
                                                    href="the-loai/the-loai-romance-72.html">Romance</a>
                                        </div>
                                        <div class="col-6 col-md-2 type-manga"><a
                                                    href="the-loai/the-loai-school-life-73.html">School
                                                Life</a></div>
                                        <div class="col-6 col-md-2 type-manga"><a
                                                    href="the-loai/the-loai-sci-fi-74.html">Sci-Fi</a>
                                        </div>
                                        <div class="col-6 col-md-2 type-manga"><a
                                                    href="the-loai/the-loai-seinen-75.html">Seinen</a>
                                        </div>
                                        <div class="col-6 col-md-2 type-manga"><a
                                                    href="the-loai/the-loai-shoujo-76.html">Shoujo</a>
                                        </div>
                                        <div class="col-6 col-md-2 type-manga"><a
                                                    href="the-loai/the-loai-shoujo-ai-77.html">Shoujo
                                                Ai</a></div>
                                        <div class="col-6 col-md-2 type-manga"><a
                                                    href="the-loai/the-loai-shounen-78.html">Shounen</a>
                                        </div>
                                        <div class="col-6 col-md-2 type-manga"><a
                                                    href="the-loai/the-loai-shounen-ai-79.html">Shounen
                                                Ai</a></div>
                                        <div class="col-6 col-md-2 type-manga"><a
                                                    href="the-loai/the-loai-slice-of-life-80.html">Slice of
                                                Life</a></div>
                                        <div class="col-6 col-md-2 type-manga"><a href="the-loai/the-loai-smut-81.html">Smut</a>
                                        </div>
                                        <div class="col-6 col-md-2 type-manga"><a
                                                    href="the-loai/the-loai-sports-82.html">Sports</a>
                                        </div>
                                        <div class="col-6 col-md-2 type-manga"><a
                                                    href="the-loai/the-loai-staff-pick-83.html">Staff
                                                pick</a></div>
                                        <div class="col-6 col-md-2 type-manga"><a
                                                    href="the-loai/the-loai-super-power-84.html">Super
                                                power</a></div>
                                        <div class="col-6 col-md-2 type-manga"><a
                                                    href="the-loai/the-loai-supernatural-85.html">Supernatural</a>
                                        </div>
                                        <div class="col-6 col-md-2 type-manga"><a
                                                    href="the-loai/the-loai-tragedy-86.html">Tragedy</a>
                                        </div>
                                        <div class="col-6 col-md-2 type-manga"><a
                                                    href="the-loai/the-loai-trap-crossdressing-87.html">
                                                Trap (Crossdressing)</a>
                                        </div>
                                        <div class="col-6 col-md-2 type-manga"><a
                                                    href="the-loai/the-loai-vncomic-88.html">VNComic</a>
                                        </div>
                                        <div class="col-6 col-md-2 type-manga"><a
                                                    href="the-loai/the-loai-vampire-89.html">Vampio</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>


                        {{--<li class="nav-item">--}}
                        {{--<a class="nav-link disabled" href="#">Disabled</a>--}}
                        {{--</li>--}}
                        <form class="form-inline manga-search-merge float-left">
                            <span class="fa fa-search manga-search-submit"></span>
                            <input class="form-control mr-sm-2 manga-search" type="search"
                                   aria-label="Search" placeholder="Tìm truyện ...">

                        </form>


                        <li class="nav-item active">
                            <a class="nav-link" href="#" data-toggle="modal" data-target="#login"><span
                                        class="fa fa-user"></span> Đăng nhập</a>
                        </li>
                        <li class="social nav-item">
                            <a class="nav-link" href="#"><span
                                        class="fa fa-bookmark alert-new"></span> Truyện theo dõi</a>
                        </li>
                        <li class="social nav-item">
                            <a class="nav-link" href="#"><span
                                        class="fa fa-envelope alert-new"></span> Hòm thư</a>
                        </li>
                        <li class="social nav-item">
                            <a class="nav-link" href="#"><span
                                        class="fa fa-cloud-upload "></span> Upload truyện</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="fa fa-user"></span> Sun Lord
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Thông tin cá nhân</a>
                                <a class="dropdown-item" href="#">Đổi mật khẩu</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Đăng xuất</a>
                            </div>
                        </li>
                        <li class="social nav-item">
                            <a class="nav-link" href="#"><span
                                        class="fa fa-phone"></span> Liên hệ - Góp ý</a>
                        </li>
                    </ul>

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
<div class="modal fade" id="login" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal-title-login">Đăng nhập</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" id="modal-login">
                    <div class="form-group">
                        <label for="exampleInputEmail1"><b>Tài khoản</b></label>
                        <input type="email" class="form-control" aria-describedby="emailHelp"
                               placeholder="Nhập tên tài khoản">
                        <small id="emailHelp" class="form-text text-muted">Sử dụng tài khoản hoặc địa chỉ email</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1"><b>Mật khẩu</b></label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Mật khẩu"
                               aria-describedby="passwordHelp">
                        <small id="passwordHelp" class="form-text text-muted"></small>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Lưu mật khẩu</label>


                    </div>
                    <br>
                    <button type="submit" class="btn btn-login"><span class="fa fa-user"></span> Đăng nhập</button>
                    <br>
                    <br>
                    <p>
                        <a href="javascript:;" id="change-forgot-password" class="m-link">Quên mật khẩu</a> |
                        <a href="javascript:;" id="change-register" class="m-link">Tạo tài khoản mới</a>
                    </p>
                </form>
                <form action="" id="modal-register" style="display: none">
                    <div class="form-group">
                        <label for="exampleInputEmail1"><b>Tên tài khoản</b> (<span style="color:red"> * </span>)
                        </label>
                        <input type="email" class="form-control" aria-describedby="emailHelp"
                               placeholder="Nhập tên tài khoản">
                        <small id="emailHelp" class="form-text text-muted"></small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1"><b>Email</b> (<span style="color:red"> * </span>)</label>
                        <input type="email" class="form-control" placeholder="Nhập email"
                               aria-describedby="passwordHelp">
                        <small id="passwordHelp" class="form-text text-muted"></small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1"><b>Mật khẩu</b> (<span style="color:red"> * </span>)</label>
                        <input type="password" class="form-control" placeholder="Nhập mật khẩu"
                               aria-describedby="passwordHelp">
                        <small id="passwordHelp" class="form-text text-muted"></small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1"><b>Nhập lại Mật khẩu</b> (<span style="color:red"> * </span>)</label>
                        <input type="password" class="form-control" placeholder="Nhập lại mật khẩu"
                               aria-describedby="passwordHelp">
                        <small id="passwordHelp" class="form-text text-muted"></small>
                    </div>
                    <br>
                    <button type="button" class="btn btn-login back-to-login"><span
                                class="fa fa-chevron-circle-left"></span> Trở lại
                    </button>
                    <button type="submit" class="btn btn-login"><span class="fa fa-user-plus"></span> Đăng ký</button>
                    <br>
                </form>
                <form action="" id="modal-forgot-password" style="display: none">
                    <div class="form-group">
                        <label for="exampleInputEmail1"><b>Nhập email</b></label>
                        <input type="email" class="form-control" aria-describedby="emailHelp"
                               placeholder="Nhập tên tài khoản">
                        <small id="emailHelp" class="form-text text-muted">Bạn hãy nhập email tài khoản của bạn , chúng
                            tôi sẽ gửi
                            lại yêu cầu lấy lại mật khẩu về email của bạn
                        </small>
                    </div>
                    <br>
                    <button type="button" class="btn btn-login back-to-login"><span
                                class="fa fa-chevron-circle-left"></span> Trở lại
                    </button>
                    <button type="submit" class="btn btn-login"><span class="fa fa-support"></span> Lấy lại mật khẩu
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

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
    $("#change-forgot-password").click(function () {
        $("#modal-login").hide();
        $("#modal-title-login").text('Yêu cầu lấy lại mật khẩu');
        $("#modal-forgot-password").show();
    });
    $("#change-register").click(function () {
        $("#modal-login").hide();
        $("#modal-title-login").text('Đăng ký tài khoản');
        $("#modal-register").show();
    });
    $(".back-to-login").click(function () {
        $("#modal-register").hide();
        $("#modal-title-login").text('Đăng nhập');
        $("#modal-forgot-password").hide();
        $("#modal-login").show();
    });
    $("nav .nav-link").on("click", function () {
        $("nav").find(".active").removeClass("active");
        $(this).parent().addClass("active");
        console.log('???');
    });
</script>
{{--Custom JS Here--}}

@yield('js')
</body>

</html>