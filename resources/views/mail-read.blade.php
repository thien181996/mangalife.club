@extends('layout')
@section('css')
    <style>
        .section-mail-read {
            min-height: 550px;
            padding-top: 30px;
        }

        .padding {
            margin-left: 10px;
            margin-right: 10px;
        }

        .contain {
            padding-top: 20px;
        }
    </style>
@endsection
@section('content')
    <div class="section-mail-read">
        <div class="container">
            <div class="row">
                <button class="btn btn-login padding"><span class="fa fa-chevron-circle-left"></span> Trở về</button>
                <button class="btn btn-login padding" data-toggle="modal" data-target="#delete"><span
                            class="fa fa-close"></span> Xóa
                </button>
                <div class="modal fade" id="delete">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Yêu cầu xóa thư</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                                Bạn đồng ý xóa thư này ?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Đồng ý</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="contain">
                    <h4>Thông báo ngày 20/11/2018</h4>
                    <small>20/11/2018 10:10:10 AM</small>
                    <br>
                    <small>To <a href="" class="from">Admin</a></small>
                    <hr>
                    <div class="content">
                        <b>Dear Sun Lord,</b><br>
                        Yêu cầu chuyển tài khoản của bạn thành tài khoản nhóm dịch đã được phía hội quản trị đồng ý ,
                        giờ đây bạn có thể up truyện lên trang mangalife của chúng tôi. <br>
                        <b> Xin chúc mừng !</b>
                        </p>

                    </div>
                </div>
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


