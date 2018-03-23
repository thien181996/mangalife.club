@extends('admin.layouts.main')
@section('title','Danh sách Manga')
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
                                Danh sách Manga
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
                                    <div class="m-loader--primary m-loader--right div_search" style="position: relative;" >
                                        <input type="text" class="form-control m--input input-search-manga" style="padding: 0.65rem 10px;" placeholder="Nhập tên Manga cần tìm kiếm" onblur="enableHide()">
                                        <div class="m--hide div_search_hide">

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <select class="form-control m-input" name="category_id" id="category_id">
                                        <option value="0">-- Lựa chọn thể loại --</option>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}" {{ $category_id == $category->id ? "selected" : "" }}>{{ $category->category_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-lg-3">
                                    <select class="form-control m-input" name="author_id" id="author_id">
                                        <option value="0">-- Lựa chọn tác giả --</option>
                                        @foreach($authors as $author)
                                            <option value="{{ $author->id }}" {{ $author_id == $author->id ? "selected" : "" }}>{{ $author->author_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-lg-3">
                                    <select class="form-control m-input" name="group_id" id="group_id">
                                        <option value="0">-- Lựa chọn nhóm dịch --</option>
                                        @foreach($groups as $group)
                                            <option value="{{ $group->id }}" {{ $group_id == $group->id ? "selected" : "" }}>{{ $group->group_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 m--align-right">
                            <a href="{{ route('panel.createManga') }}" class="btn btn-accent m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill">
                                <span>
                                    <i class="la la-plus-circle"></i>
                                    <span>
                                        Thêm Manga
                                    </span>
                                </span>
                            </a>
                        </div>
                    </div>

                    <table class="table table-striped">
                        <thead>
                        <tr class="m--font-transform-u m--font-boldest">
                            <th scope="col">Tên Manga</th>
                            <th scope="col">Slug</th>
                            <th scope="col" class="text-center">Hành động</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($mangas as $manga)
                            <tr>
                                <td>{{ $manga->manga_name }}</td>
                                <td>{{ $manga->manga_slug }}</td>
                                <td class="text-center">
                                    <a href="#" class="btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="dropdown">
                                        <i class="la la-ellipsis-h"></i>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 37px, 0px); top: 0px; left: 0px; will-change: transform;">
                                        <a class="dropdown-item" href="{{ route('panel.editManga',['id'=>$manga->id]) }}"><i class="la la-edit"></i> Chỉnh sửa</a>
                                        <a class="dropdown-item manga_delete" href="#modal_manga_delete" value="{{ route('panel.deleteManga',['id'=>$manga->id]) }}" manga_name="{{ $manga->manga_name }}"><i class="la la-trash"></i> Xóa</a>
                                        <a class="dropdown-item" href="{{ route('panel.listChapter') }}?manga_id={{ $manga->id }}"><i class="la la-cog"></i> Danh sách chương</a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{ $mangas->appends(['category_id'=>$category_id,'author_id'=>$author_id,'group_id'=>$group_id])->links() }}
                </div>
            </div>
            <!--end::Portlet-->
        </div>
        <div class="modal fade" id="modal_manga_delete" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">
                            Xóa Manga
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">
                                ×
                            </span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p id="modal_manga_delete_content"></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">
                            Đóng
                        </button>
                        <a href="" id="modal_manga_delete_button" class="btn btn-primary">
                            Xóa
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <input type="hidden" id="routeAjaxManga" value="{{ route('panel.ajaxManga') }}">
@endsection
@section('js')
    <script>
        $('#author_id').on('select2:select', function (e) {
           let author_id = e.params.data.id;
           if(author_id != 0)
           {
               location.href = '?author_id=' + author_id;
           }
        });
        $('#group_id').on('select2:select', function (e) {
            let group_id = e.params.data.id;
            if(group_id != 0)
            {
                location.href = '?group_id=' + group_id;
            }
        });
        $('#category_id').on('select2:select', function (e) {
            let category_id = e.params.data.id;
            if(category_id != 0)
            {
                location.href = '?category_id=' + category_id;
            }
        });
    </script>
@endsection