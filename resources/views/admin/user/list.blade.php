@extends('admin.layouts.main')
@section('title','Danh sách tài khoản')
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
                            Tài khoản
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

                <div class="alert alert-brand">
                    <h5>Chú thích</h5>
                    <span class="m-badge m-badge--danger">A</span> Quản trị viên
                    <span class="m-badge m-badge--info">M</span> Kiểm duyệt viên
                    <span class="m-badge m-badge--primary">M</span> Thành viên
                    <span class="m-badge m-badge--metal">B</span> Bị cấm
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-lg-4" >
                                <div class="m-loader--primary m-loader--right div_search" style="position: relative;" >
                                    <input type="text" class="form-control m--input input-search-user" style="padding: 0.65rem 10px;" placeholder="Nhập email cần tìm kiếm" onblur="enableHide()">
                                    <div class="m--hide div_search_hide">

                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 m--align-right">
                        {{--<a href="{{ route('panel.updateRoutersModule') }}" class="btn btn-accent m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill">--}}
                            {{--<span>--}}
                                {{--<i class="la la-refresh"></i>--}}
                                {{--<span>--}}
                                    {{--Cập nhật Module--}}
                                {{--</span>--}}
                            {{--</span>--}}
                        {{--</a>--}}
                    </div>
                </div>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">Tên thành viên</th>
                        <th scope="col">Email</th>
                        <th scope="col" class="text-center">Loại tài khoản</th>
                        <th scope="col" class="text-center">Hành động</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->email }}</td>
                        <td class="text-center">
                            @if($user->getRoleId() == 1)<span class="m-badge m-badge--danger">A</span>@endif
                            @if($user->getRoleId() == 2)<span class="m-badge m-badge--info">M</span>@endif
                            @if($user->getRoleId() == 3)<span class="m-badge m-badge--primary">M</span>@endif
                            @if($user->getRoleId() == 4)<span class="m-badge m-badge--metal">B</span>@endif
                        </td>
                        <td class="text-center">
                            <a href="#" class="btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="dropdown" id="dropdownMenuButton">
                                <i class="la la-ellipsis-h"></i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 37px, 0px); top: 0px; left: 0px; will-change: transform;">
                                <a class="dropdown-item" href="{{ route('panel.editUser',['id'=>$user->id]) }}"><i class="la la-edit"></i> Chỉnh sửa</a>
                                <a class="dropdown-item user_delete" href="{{ route('panel.deleteUser',['id'=>$user->id]) }}"><i class="la la-lock"></i> Khóa tài khoản</a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!--end::Portlet-->
    </div>
</div>
@endsection
<input type="hidden" id="routeAjaxUser" value="{{ route('panel.ajaxUser') }}">