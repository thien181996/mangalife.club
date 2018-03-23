<!DOCTYPE html>
<html>

<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>
    <!--end::Web font -->
    <!--begin::Base Styles -->
    <!--begin::Page Vendors -->
    <link href="{{ asset('assets/vendors/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Page Vendors -->
    <link href="{{ asset('assets/vendors/base/vendors.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/demo/default/base/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="{{ asset('assets/demo/default/media/img/logo/favicon.ico') }}" />
    <!--end::Base Styles -->
    <!-- ::Custom Style -->
    <link href="{{ asset('pages/css/main.css') }}" rel="stylesheet" type="text/css" />
    <!-- ::end Custom Style -->

</head>

<body>
    <header id="header">
        <div class="section-navigation">
            <nav class="navbar navbar-expand-lg navbar-dark bg-light">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('pages/images/logo.png') }}" width="200">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                                   <li class="dropdown menu-large nav-item"> <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"> Product Listing </a>
                                           <ul class="dropdown-menu megamenu">
                                                <li class="dropdown-item">
                                                    <div class="row">
                                                    <div class="col-md-6 col-lg-3 text-center">
                                                        <div class="card">
                                                        <a href="#" class="thumbnail">
                                                          <img src="http://placehold.it/150x120">
                                                        </a>
                                                    </div></div>
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
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				          Dropdown
				        </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#">Disabled</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
            </nav>
        </div>
    </header>
    <main>

    </main>
    <footer id="footer">

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
</body>

</html>