@extends('layout')
@section('css')
    <link href="{{ asset('pages/css/detail-main.css') }}" rel="stylesheet" type="text/css"/>
@endsection
@section('content')
    <div class="section-breadcrumb">
        <div class="container">
            <div class="row">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                        <li class="breadcrumb-item"><a href="#">Library</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Data</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="section-detail-manga">
        <div class="container">

            <div class="row">
                <div class="col-md-8">

                    <div class="row section-manga-info">

                        <div class="col-md-6">
                            <div class="item">
                                <img src="{{asset('pages/images/re-life.jpg')}}" alt="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-12">
                                    <h3>Re-Life</h3>

                                </div>

                                <fieldset class="rating ">
                                    <input type="radio" id="star5" name="rating" value="5"/>
                                    <label class="full" for="star5" title="Awesome - 5 stars"></label>
                                    <input type="radio" id="star4half" name="rating" value="4 and a half"/>
                                    <label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                                    <input type="radio" id="star4" name="rating" value="4"/>
                                    <label class="full" for="star4" title="Pretty good - 4 stars"></label>
                                    <input type="radio" id="star3half" name="rating" value="3 and a half"/>
                                    <label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                                    <input type="radio" id="star3" name="rating" value="3"/>
                                    <label class="full" for="star3" title="Meh - 3 stars"></label>
                                    <input type="radio" id="star2half" name="rating" value="2 and a half"/>
                                    <label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                                    <input type="radio" id="star2" name="rating" value="2"/>
                                    <label class="full" for="star2" title="Kinda bad - 2 stars"></label>
                                    <input type="radio" id="star1half" name="rating" value="1 and a half"/>
                                    <label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                                    <input type="radio" id="star1" name="rating" value="1"/>
                                    <label class="full" for="star1" title="Sucks big time - 1 star"></label>
                                    <input type="radio" id="starhalf" name="rating" value="half"/>
                                    <label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                                </fieldset>
                            </div>
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
                    <div class="section-list-chapter-manga">
                        <div class="row">
                            <table class="table" style="background: white">

                                <thead>
                                <tr>
                                    <td colspan="3">
                                        <h2 class="heading-title">
                                            Danh sách chương truyện
                                        </h2>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="col">Tên chương</th>
                                    <th scope="col">Ngày đăng</th>
                                    <th scope="col">Lượt xem</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row"><a href="#">Chapter 3: </a></th>
                                    <td>22/4/2018</td>
                                    <td>686868</td>
                                </tr>
                                <tr>
                                    <th scope="row"><a href="#">Chapter 2: </a></th>
                                    <td>22/4/2018</td>
                                    <td>686868</td>
                                </tr>
                                <tr>
                                    <th scope="row"><a href="#">Chapter 1: </a></th>
                                    <td>22/4/2018</td>
                                    <td>686868</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
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
                                                          rows="3" placeholder="Bình luận vào đây"></textarea>
                                            </div>
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>

                <div class="col-md-4">
                    <div class="section-manga-new-sidebar">
                        <h2 class="heading-title">Sidebar</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')

@endsection


