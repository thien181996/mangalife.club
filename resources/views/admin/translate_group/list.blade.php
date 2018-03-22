@extends('admin.layouts.main')
@section('title','Danh sách nhóm dịch')
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
                                Nhóm dịch
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
                                <div class="col-lg-4" >
                                    <div class="m-loader--primary m-loader--right div_search" style="position: relative;" >
                                        <input type="text" class="form-control m--input input-search-group" style="padding: 0.65rem 10px;" placeholder="Nhập tên nhóm dịch cần tìm kiếm" onblur="enableHide()">
                                        <div class="m--hide div_search_hide">

                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 m--align-right">
                            <a href="{{ route('panel.createTranslateGroup') }}" class="btn btn-accent m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill">
                                <span>
                                    <i class="la la-plus-circle"></i>
                                    <span>
                                        Thêm Nhóm dịch
                                    </span>
                                </span>
                            </a>
                        </div>
                    </div>

                    <table class="table table-striped">
                        <thead>
                        <tr class="m--font-transform-u m--font-boldest">
                            <th scope="col">Tên nhóm dịch</th>
                            <th scope="col">Slug</th>
                            <th scope="col">Chú thích</th>
                            <th scope="col" class="text-center">Hành động</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($translate_groups as $group)
                            <tr>
                                <td>{{ $group->group_name }}</td>
                                <td>{{ $group->group_slug }}</td>
                                <td>{{ $group->group_description }}</td>
                                <td class="text-center">
                                    <a href="#" class="btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="dropdown" id="dropdownMenuButton">
                                        <i class="la la-ellipsis-h"></i>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 37px, 0px); top: 0px; left: 0px; will-change: transform;">
                                        <a class="dropdown-item" href="{{ route('panel.editTranslateGroup',['id'=>$group->id]) }}"><i class="la la-edit"></i> Chỉnh sửa</a>
                                        <a class="dropdown-item group_delete" href="#modal_translate_group_delete" value="{{ route('panel.deleteTranslateGroup',['id'=>$group->id]) }}" group_name="{{ $group->group_name }}"><i class="la la-trash"></i> Xóa</a>
                                        <a class="dropdown-item" href="{{ route('panel.listManga') }}?group_id={{ $group->id }}"><i class="la la-cog"></i> Danh sách truyện</a>
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
        <div class="modal fade" id="modal_translate_group_delete" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">
                            Xóa nhóm dịch
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">
                                ×
                            </span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p id="modal_translate_group_delete_content"></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">
                            Đóng
                        </button>
                        <a href="" id="modal_translate_group_delete_button" class="btn btn-primary">
                            Xóa
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
<input type="hidden" id="routeAjaxTranslateGroup" value="{{ route('panel.ajaxTranslateGroup') }}">