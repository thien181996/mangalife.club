@extends('layout')
@section('css')
    <style>
        .section-manga-author-detail img {
            padding: 5px;
        }

        .section-manga-author-detail .row {
            background: white;
            padding-top: 10px;
            padding-bottom: 10px;
        }

        .translate-content {
            padding-top: 5px;
        }
    </style>
@endsection
@section('content')
    <div class="section-manga-author-detail">
        <div class="container">


            <div class="row">
                <div class="col-md-3">
                    <img src="{{asset('pages/images/re-life.jpg')}}" alt="" class="item-img-width">
                </div>
                <div class="col-md-9">
                    <h3>Nhóm dịch <a href="#">#<span class="manga-type">Toku</span></a>
                    </h3>
                    <div class="translate-content">
                        <p><b>Giới thiệu : </b><br>
                            <small>Lorem ipsuLorem ipsuLorem ipsuLorem ipsuLorem ipsuLorem ipsuLorem ipsuLorem ipsuLorem
                                ipsuLorem ipsuLorem ipsuLorem ipsuLorem ipsuLorem ipsuLorem ipsuLorem ipsuLorem
                                ipsuLorem
                                ipsuLorem ipsuLorem ipsuLorem ipsuLorem ipsuLorem ipsuLorem ipsuLorem ipsuLorem
                                ipsuLorem
                                ipsuLorem ipsuLorem ipsuLorem ipsuLorem ipsuLorem ipsuLorem ipsuLorem ipsuLorem
                                ipsuLorem
                                ipsuLorem ipsuLorem ipsuLorem ipsuLorem ipsuLorem ipsuLorem ipsuLorem ipsuLorem
                                ipsuLorem
                                ipsuLorem ipsuLorem ipsuLorem ipsuLorem ipsuLorem ipsuLorem ipsuLorem ipsuLorem
                                ipsuLorem
                                ipsuLorem ipsu
                            </small>
                        </p>
                        <p><b>Liên kết : </b><br>
                            <a href="https://www.facebook.com/FireGodPhoenix-889296351096757/">
                                <small>https://www.facebook.com/FireGodPhoenix-889296351096757</small>
                            </a>
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="section-manga-new">
        <div class="container">
            <div class="section-manga-new-content">
                <h2 class="heading-title">Các truyện nhóm đã dịch</a>
                </h2>
                <div class="row">
                    <div class="col-md-2 col-6">
                        <div class="item">
                            <img src="{{asset('pages/images/re-life.jpg')}}" alt="" class="item-img-width">
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
                    <div class="col-md-2 col-6">
                        <div class="item">
                            <img src="{{asset('pages/images/re-life.jpg')}}" alt="" class="item-img-width">
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
                    <div class="col-md-2 col-6">
                        <div class="item">
                            <img src="{{asset('pages/images/re-life.jpg')}}" alt="" class="item-img-width">
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
                    <div class="col-md-2 col-6">
                        <div class="item">
                            <img src="{{asset('pages/images/re-life.jpg')}}" alt="" class="item-img-width">
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
                    <div class="col-md-2 col-6">
                        <div class="item">
                            <img src="{{asset('pages/images/re-life.jpg')}}" alt="" class="item-img-width">
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
                    <div class="col-md-2 col-6">
                        <div class="item">
                            <img src="{{asset('pages/images/re-life.jpg')}}" alt="" class="item-img-width">
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
                    <div class="col-md-2 col-6">
                        <div class="item">
                            <img src="{{asset('pages/images/re-life.jpg')}}" alt="" class="item-img-width">
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
                    <div class="col-md-2 col-6">
                        <div class="item">
                            <img src="{{asset('pages/images/re-life.jpg')}}" alt="" class="item-img-width">
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
                    <div class="col-md-2 col-6">
                        <div class="item">
                            <img src="{{asset('pages/images/re-life.jpg')}}" alt="" class="item-img-width">
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
                    <div class="col-md-2 col-6">
                        <div class="item">
                            <img src="{{asset('pages/images/re-life.jpg')}}" alt="" class="item-img-width">
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
                    <div class="col-md-2 col-6">
                        <div class="item">
                            <img src="{{asset('pages/images/re-life.jpg')}}" alt="" class="item-img-width">
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
                    <div class="col-md-2 col-6">
                        <div class="item">
                            <img src="{{asset('pages/images/re-life.jpg')}}" alt="" class="item-img-width">
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
    </div>
@endsection
@section('js')

@endsection


