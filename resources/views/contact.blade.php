@extends('layout')
@section('css')
    <link href="{{ asset('pages/css/detail-main.css') }}" rel="stylesheet" type="text/css"/>
    <style>
        .section-contact .list-unstyled {
            padding: 20px 30px;
        }

        .section-contact {
            margin: 20px 0;
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
                        <li class="breadcrumb-item active">Góp ý - Liên hệ</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="section-contact">
        <div class="container">
            <form class="list-unstyled">
                <h1 class="heading-title">Góp ý & Liên hệ</h1>
                <div class="form-group ">
                    <label for="email">Email
                        <small>(<span style="color:red"> * </span>)</small>
                    </label>
                    <input type="email" class="form-control" id="email" placeholder="Nhập email">
                </div>
                <div class="form-group">
                    <label for="title">Chủ đề
                        <small>(<span style="color:red"> * </span>)</small>
                    </label>
                    <select name="title" id="title" class="form-control">
                        <option value="" selected>Báo lỗi truyện</option>
                        <option value="">Liên hệ</option>
                        <option value="">Góp ý</option>
                        <option value="">Khác ( Ghi tên chủ đề ở đầu ô nhập nội dung )</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="desc">Nội dung
                        <small>(<span style="color:red"> * </span>)</small>
                    </label>
                    <textarea type="text" class="form-control" id="desc"
                              placeholder="Nhập nội dung liên quan tới chủ đề" rows="5"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Gửi</button>
            </form>
        </div>
    </div>

@endsection
@section('js')

@endsection


