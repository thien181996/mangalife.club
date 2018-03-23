@extends('layout')
@section('css')
    <style>
        button {
            font-family: 'Roboto' !important;
        }

        .section-manga-search {
            padding-top: 90px;
            padding-bottom: 90px;
        }

        .mail-id {
            width: 5%;
        }

        .mail-sender {
            width: 15%;
        }

        .mail-name {
            width: 60%;
        }

        .mail-date {
            width: 20%;
        }

        .mail-heading {
            background: white;
            box-shadow: 0 7px 8px -8px black;
            margin-bottom: 3px;
        }

        .a-mail-check {
            background: white;
            cursor: pointer;
            font-weight: bold;
        }

        .a-mail-check a {
            color: #343a40 !important;
        }

        .a-mail-check:hover {
            background: rgba(255, 255, 255, .55);
        }

        .a-mail-uncheck {
            background: rgba(243, 243, 243, .85);
            cursor: pointer;
        }

        .a-mail-uncheck:hover {
        }

        .a-mail-uncheck a {
            color: #343a40 !important;
        }

        .table {
            border: 1px white solid;
        }

        #mails-action {
            width: 100%;
            float: left;

        }

        .form-life, #mails-action, form-life:focus, form-life:active {
            border-radius: 0;
            border: 1px solid #f40009 !important;
            opacity: 0.5;
        }

        #mails-action:hover, .form-life:hover, form-life:active, form-life:focus {
            opacity: 1;
            transition: 0.3s;
        }

        .section-manga-search .btn-login {
            padding-left: 5px;
            padding-right: 5px;

        }

        .heading {
            padding-top: 10px;
            padding-bottom: 10px;
        }
    </style>
@endsection
@section('content')
    <div class="section-manga-search">
        <div class="container">
            <h2 class="heading"><span class="fa fa-envelope"></span> Hòm thư
                <button class="btn btn-login pull-right">Tìm thư</button>
                <input type="search"
                       class="form-control pull-right col-4 form-life"
                       placeholder="Tìm kiếm ... ">

            </h2>
            <table class="table">
                <thead>
                <tr class="mail-heading">
                    <th class="mail-id">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="checkAll">
                            <label class="form-check-label" for="checkAll">
                                All
                            </label>
                        </div>
                    </th>
                    <th class="mail-sender">Người gửi</th>
                    <th class="mail-name">Tên</th>
                    <th class="mail-date">Thời gian</th>
                </tr>
                </thead>
                <tbody>
                <tr class="a-mail-check">
                    <td>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input checker" type="checkbox" name="arr[]"
                                   value="1">
                            <label class="form-check-label">2</label>
                        </div>
                    </td>
                    <td>Admin</td>
                    <td><a href="">Thông báo 14/3/2018</a></td>
                    <td>14/3/2018 09:09:09PM</td>
                </tr>
                <tr class="a-mail-uncheck">
                    <td>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input checker" type="checkbox" name="arr[]"
                                   value="1">
                            <label class="form-check-label">2</label>
                        </div>
                    </td>
                    <td>Admin</td>
                    <td><a href="">Thông báo 14/3/2018</a></td>
                    <td>14/3/2018 09:09:09PM</td>
                </tr>
                <tr class="a-mail-uncheck">
                    <td>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input checker" type="checkbox" name="arr[]"
                                   value="1">
                            <label class="form-check-label">2</label>
                        </div>
                    </td>
                    <td>Admin</td>
                    <td><a href="">Thông báo 14/3/2018</a></td>
                    <td>14/3/2018 09:09:09PM</td>
                </tr>
                <tr class="a-mail-check">
                    <td>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input checker" type="checkbox" name="arr[]"
                                   value="1">
                            <label class="form-check-label">2</label>
                        </div>
                    </td>
                    <td>Admin</td>
                    <td><a href="">Thông báo 14/3/2018</a></td>
                    <td>14/3/2018 09:09:09PM</td>
                </tr>
                </tbody>
            </table>
            <div class="row">

                <div class="form-group col-8 col-md-4">
                    <select id="mails-action" class="form-control">
                        <option selected>Đánh dấu đã đọc</option>
                        <option>Xóa</option>
                    </select>
                </div>
                <div class="form-group col-4 col-md-8">
                    <button class="btn btn-login">Hành động</button>
                </div>
            </div>

        </div>
    </div>
    <div class="container">
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
    <script>
        var check = true;
        $('#checkAll').click(function () {
            if (check) {
                $('.checker').prop('checked', true)
                check = false;
            } else {
                check = true;
                $('.checker').prop('checked', false);
            }
        });
    </script>
@endsection
        

