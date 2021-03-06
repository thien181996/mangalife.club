@extends('admin.layouts.main')
@section('title','Danh sách Bình luận')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <!--begin::Portlet-->
            <div class="m-portlet m-portlet--head-sm" data-portlet="true" id="m_portlet_tools_3">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
						<span class="m-portlet__head-icon">
							<i class="flaticon-coins"></i>
						</span>
                            <h3 class="m-portlet__head-text">
                                Danh sách Bình luận
                            </h3>
                        </div>
                    </div>
                    <div class="m-portlet__head-tools">
                        <ul class="m-portlet__nav">
                            <li class="m-portlet__nav-item">
                                <a href="#" data-portlet-tool="fullscreen" class="m-portlet__nav-link m-portlet__nav-link--icon" title="" data-original-title="Fullscreen"><i class="la la-expand"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="row">
                                <div class="col-lg-3">
                                    <select class="form-control m-input" name="user_id" id="user_id">
                                        <option value="0">-- Lựa chọn tài khoản --</option>
                                        @foreach($users as $user)
                                            <option value="{{ $user->id }}" {{ $user_id == $user->id ? "selected" : "" }}>{{ $user->username }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 m--align-right">

                        </div>
                    </div>

                    <table class="table table-striped">
                        <thead>
                        <tr class="m--font-transform-u m--font-boldest">
                            <th scope="col">Tài khoản</th>
                            <th scope="col">Nội dung</th>
                            <th scope="col" class="text-center">Hành động</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($comments as $comment)
                            <tr>
                                <td>{{ $comment->getUserEmail() }}</td>
                                <td>{{ $comment->comment_content }}</td>
                                <td class="text-center">
                                    <a href="#" class="btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="dropdown">
                                        <i class="la la-ellipsis-h"></i>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 37px, 0px); top: 0px; left: 0px; will-change: transform;">
                                        <a class="dropdown-item comment_delete" value="{{ route('panel.deleteComment',['id'=>$comment->id]) }}" comment_content="{{ $comment->comment_content }}"><i class="la la-trash"></i> Xóa</a>
                                        <a class="dropdown-item user_delete" href="{{ route('panel.deleteUser',['id'=>$comment->user_id]) }}"><i class="la la-lock"></i> Khóa tài khoản</a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{ $comments->appends(['user_id'=>$user_id])->links() }}
                </div>
            </div>
            <!--end::Portlet-->
        </div>
        <div class="modal fade" id="modal_comment_delete" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">
                            Xóa Bình luận
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">
                                ×
                            </span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p id="modal_comment_delete_content"></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">
                            Đóng
                        </button>
                        <a href="" id="modal_comment_delete_button" class="btn btn-primary">
                            Xóa
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        $('#user_id').on('select2:select', function (e) {
            let user_id = e.params.data.id;
            if(user_id != 0)
            {
                location.href = '?user_id=' + user_id;
            }
        });
    </script>
@endsection