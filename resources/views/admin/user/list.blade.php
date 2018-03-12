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
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">Tài khoản</th>
                        <th scope="col">Email</th>
                        <th scope="col">Hành động</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <a href="#" class="btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="dropdown" id="dropdownMenuButton">
                                <i class="la la-ellipsis-h"></i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 37px, 0px); top: 0px; left: 0px; will-change: transform;">
                                <a class="dropdown-item" href="#"><i class="la la-bell"></i> Chỉnh sửa</a>
                                <a class="dropdown-item" href="#"><i class="la la-cloud-upload"></i> Xóa</a>
                                <a class="dropdown-item" href="#"><i class="la la-cog"></i> Something else</a>
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