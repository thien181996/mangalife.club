@extends('layout')
@section('css')
    <link href="{{ asset('pages/css/detail-main.css') }}" rel="stylesheet" type="text/css"/>
    <style>
        h3 {
            padding-left: 15px;
            padding-top: 1px;
        }

        hr {
            border-color: #f7f7f9;
        }

        .section-manga-info {
            padding-bottom: 5px;
        }

        .section-manga-info .fa {
            color: #5867dd;
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
                        <li class="breadcrumb-item active" aria-current="page">Truyện theo dõi</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="section-detail-manga">
        <div class="container">
            <div class="row section-manga-info">
                <div class="col-12">
                    <h3><a href="">Re-Life</a> <span class="pull-right"><span
                                    class="fa fa-close"></span> <a href=""><span
                                        style="font-size: 14px">Bỏ theo dõi</span> </a></span>
                    </h3>
                    <hr>
                </div>
                <div class="col-md-2">
                    <div class="item">
                        <img src="{{asset('pages/images/re-life.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="row">
                        <p>
                            <b>Tác giả :</b> <span class="author"><a href="#">Toku</a></span>
                            <br>
                            <b>Nhóm dịch :</b> <span class="translate-team"><a
                                        href="#">Sun Và Đồng Bọn</a></span>
                            <br>
                            <b>Tags : </b> <span class="tags"><a href="#"> Action</a><a
                                        href="#"> Romance </a></span>
                        </p>
                        <p>
                            <b>Nội dung : </b> <span class="manga-content">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, deserunt dolores esse explicabo repudiandae saepe veniam? Adipisci, consectetur cupiditate dolorem dolores earum eveniet expedita fugiat quae quidem, quod temporibus voluptatibus.
                                    </span>
                        </p>

                    </div>
                </div>
            </div>
            <div class="row section-manga-info">
                <div class="col-12">
                    <h3><a href="">Re-Life</a> <span class="pull-right"><span
                                    class="fa fa-close"></span> <a href=""><span
                                        style="font-size: 14px">Bỏ theo dõi</span> </a></span>
                    </h3>
                    <hr>
                </div>
                <div class="col-md-2">
                    <div class="item">
                        <img src="{{asset('pages/images/re-life.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="row">
                        <p>
                            <b>Tác giả :</b> <span class="author"><a href="#">Toku</a></span>
                            <br>
                            <b>Nhóm dịch :</b> <span class="translate-team"><a
                                        href="#">Sun Và Đồng Bọn</a></span>
                            <br>
                            <b>Tags : </b> <span class="tags"><a href="#"> Action</a><a
                                        href="#"> Romance </a></span>
                        </p>
                        <p>
                            <b>Nội dung : </b> <span class="manga-content">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, deserunt dolores esse explicabo repudiandae saepe veniam? Adipisci, consectetur cupiditate dolorem dolores earum eveniet expedita fugiat quae quidem, quod temporibus voluptatibus.
                                    </span>
                        </p>

                    </div>
                </div>
            </div>
            <div class="row section-manga-info">
                <div class="col-12">
                    <h3><a href="">Re-Life</a> <span class="pull-right"><span
                                    class="fa fa-close"></span> <a href=""><span
                                        style="font-size: 14px">Bỏ theo dõi</span> </a></span>
                    </h3>
                    <hr>
                </div>
                <div class="col-md-2">
                    <div class="item">
                        <img src="{{asset('pages/images/re-life.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="row">
                        <p>
                            <b>Tác giả :</b> <span class="author"><a href="#">Toku</a></span>
                            <br>
                            <b>Nhóm dịch :</b> <span class="translate-team"><a
                                        href="#">Sun Và Đồng Bọn</a></span>
                            <br>
                            <b>Tags : </b> <span class="tags"><a href="#"> Action</a><a
                                        href="#"> Romance </a></span>
                        </p>
                        <p>
                            <b>Nội dung : </b> <span class="manga-content">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, deserunt dolores esse explicabo repudiandae saepe veniam? Adipisci, consectetur cupiditate dolorem dolores earum eveniet expedita fugiat quae quidem, quod temporibus voluptatibus.
                                    </span>
                        </p>

                    </div>
                </div>
            </div>
            <div class="row section-manga-info">
                <div class="col-12">
                    <h3><a href="">Re-Life</a> <span class="pull-right"><span
                                    class="fa fa-close"></span> <a href=""><span
                                        style="font-size: 14px">Bỏ theo dõi</span> </a></span>
                    </h3>
                    <hr>
                </div>
                <div class="col-md-2">
                    <div class="item">
                        <img src="{{asset('pages/images/re-life.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="row">
                        <p>
                            <b>Tác giả :</b> <span class="author"><a href="#">Toku</a></span>
                            <br>
                            <b>Nhóm dịch :</b> <span class="translate-team"><a
                                        href="#">Sun Và Đồng Bọn</a></span>
                            <br>
                            <b>Tags : </b> <span class="tags"><a href="#"> Action</a><a
                                        href="#"> Romance </a></span>
                        </p>
                        <p>
                            <b>Nội dung : </b> <span class="manga-content">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, deserunt dolores esse explicabo repudiandae saepe veniam? Adipisci, consectetur cupiditate dolorem dolores earum eveniet expedita fugiat quae quidem, quod temporibus voluptatibus.
                                    </span>
                        </p>

                    </div>
                </div>
            </div>
            <div class="row section-manga-info">
                <div class="col-12">
                    <h3><a href="">Re-Life</a> <span class="pull-right"><span
                                    class="fa fa-close"></span> <a href=""><span
                                        style="font-size: 14px">Bỏ theo dõi</span> </a></span>
                    </h3>
                    <hr>
                </div>
                <div class="col-md-2">
                    <div class="item">
                        <img src="{{asset('pages/images/re-life.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="row">
                        <p>
                            <b>Tác giả :</b> <span class="author"><a href="#">Toku</a></span>
                            <br>
                            <b>Nhóm dịch :</b> <span class="translate-team"><a
                                        href="#">Sun Và Đồng Bọn</a></span>
                            <br>
                            <b>Tags : </b> <span class="tags"><a href="#"> Action</a><a
                                        href="#"> Romance </a></span>
                        </p>
                        <p>
                            <b>Nội dung : </b> <span class="manga-content">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, deserunt dolores esse explicabo repudiandae saepe veniam? Adipisci, consectetur cupiditate dolorem dolores earum eveniet expedita fugiat quae quidem, quod temporibus voluptatibus.
                                    </span>
                        </p>

                    </div>
                </div>
            </div>
            <div class="row section-manga-info">
                <div class="col-12">
                    <h3><a href="">Re-Life</a> <span class="pull-right"><span
                                    class="fa fa-close"></span> <a href=""><span
                                        style="font-size: 14px">Bỏ theo dõi</span> </a></span>
                    </h3>
                    <hr>
                </div>
                <div class="col-md-2">
                    <div class="item">
                        <img src="{{asset('pages/images/re-life.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="row">
                        <p>
                            <b>Tác giả :</b> <span class="author"><a href="#">Toku</a></span>
                            <br>
                            <b>Nhóm dịch :</b> <span class="translate-team"><a
                                        href="#">Sun Và Đồng Bọn</a></span>
                            <br>
                            <b>Tags : </b> <span class="tags"><a href="#"> Action</a><a
                                        href="#"> Romance </a></span>
                        </p>
                        <p>
                            <b>Nội dung : </b> <span class="manga-content">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, deserunt dolores esse explicabo repudiandae saepe veniam? Adipisci, consectetur cupiditate dolorem dolores earum eveniet expedita fugiat quae quidem, quod temporibus voluptatibus.
                                    </span>
                        </p>

                    </div>
                </div>
            </div>
        </div>
        <div class="section-manga-new-pagination row">
            <nav aria-label="Page navigation example " style="margin:0 auto;">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Next</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
@endsection
@section('js')

@endsection


