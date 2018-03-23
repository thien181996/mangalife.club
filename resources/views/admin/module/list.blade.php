@extends('admin.layouts.main')
@section('title','Danh sách Module')
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
                                Danh sách Module
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
                    @if (session('msg'))
                        <div class="alert alert-success">
                            {{ session('msg') }}
                        </div>
                    @endif
                    <div class="alert alert-brand">
                        <h5>Chú thích</h5>
                        <span class="m-badge m-badge--danger">A</span> Quản trị viên
                        <span class="m-badge m-badge--info">M</span> Kiểm duyệt viên
                        <span class="m-badge m-badge--primary">M</span> Thành viên
                        <span class="m-badge m-badge--metal">B</span> Bị cấm
                    </div>
                    <div class="row">
                        <div class="col-lg-8">

                        </div>
                        <div class="col-lg-4 m--align-right">
                            <a href="{{ route('panel.updateRoutersModule') }}" class="btn btn-accent m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill">
                                <span>
                                    <i class="la la-refresh"></i>
                                    <span>
                                        Cập nhật Module
                                    </span>
                                </span>
                            </a>
                        </div>
                    </div>

                    <table class="table table-striped">
                        <thead>
                        <tr class="m--font-transform-u m--font-boldest">
                            <th scope="col">Tên Module</th>
                            <th scope="col">Danh sách Action</th>
                            <th scope="col">Quyền truy cập</th>
                            <th scope="col" class="text-center">Hành động</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($modules as $module)
                            <tr>
                                <td>{{ $module->module_name }}</td>
                                <td colspan="2">
                                    @foreach($module->moduleAction() as $action)
                                    <div class="row m--padding-5">
                                        <div class="col-lg-6">
                                            <span style="display: block;"><a href="{{ route('panel.editModuleAction',['actionName'=>$action->action_name]) }}">{{ $action->action_name }}</a></span>

                                        </div>
                                        <div class="col-lg-6 m--padding-left-40">
                                            @foreach($module->getRoleModule($action->id) as $role)
                                                @if($role->role_id == 1)<span class="m-badge m-badge--danger">A</span>@endif
                                                @if($role->role_id == 2)<span class="m-badge m-badge--info">M</span>@endif
                                                @if($role->role_id == 3)<span class="m-badge m-badge--primary">M</span>@endif
                                                @if($role->role_id == 4)<span class="m-badge m-badge--metal">B</span>@endif
                                            @endforeach
                                        </div>
                                    </div>
                                    @endforeach
                                </td>
                                <td class="text-center">
                                    <a href="#" class="btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="dropdown">
                                        <i class="la la-ellipsis-h"></i>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 37px, 0px); top: 0px; left: 0px; will-change: transform;">
                                        <a class="dropdown-item module_delete" href="#modal_rate_delete" value="{{ route('panel.deleteModule',['id'=>$module->id]) }}"><i class="la la-trash"></i> Xóa</a>
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
        <div class="modal fade" id="modal_module_delete" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">
                            Xóa Module
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">
                                ×
                            </span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p id="modal_module_delete_content"></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">
                            Đóng
                        </button>
                        <a href="" id="modal_module_delete_button" class="btn btn-primary">
                            Xóa
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection