@extends('admin.layouts.main')
@section('title','Chỉnh sửa Chương')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="m-portlet">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                                <span class="m-portlet__head-icon m--hide">
                                    <i class="la la-gear"></i>
                                </span>
                            <h3 class="m-portlet__head-text">
                                Chỉnh sửa Chương
                            </h3>
                        </div>
                    </div>
                </div>
                <!--begin::Form-->
                <form class="m-form m-form--fit m-form--label-align-right m-form--group-seperator" action="{{ route('panel.storeChapter') }}" method="post" enctype="multipart/form-data">
                    <div class="m-portlet__body">
                        <div class="form-group m-form__group row">
                            <label class="col-lg-2 col-form-label">
                                Tên Manga <span class="m--font-danger">*</span>
                            </label>
                            <div class="col-lg-6">
                                <select class="form-control m-input" name="manga_id" id="manga_select">
                                    @foreach($mangas as $manga)
                                        <option value="{{ $manga->id }}" {{ $chapter->manga_id == $manga->id ? "selected" : "" }}>{{ $manga->manga_name }}</option>
                                    @endforeach
                                </select>
                                @if(count($errors) > 0)
                                    <span class="m--font-danger">
                                        {{$errors->first('manga_id')}}
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label class="col-lg-2 col-form-label">
                                Tên Chương <span class="m--font-danger">*</span>
                            </label>
                            <div class="col-lg-6">
                                <input id="chapter_name" name="chapter_name" type="text" class="form-control m-input" placeholder="Nhập tên Chương" value="{{ $chapter->chapter_name }}">
                                <span class="m--font-danger chapter_name_error m--hide"></span>
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label class="col-lg-2 col-form-label">
                                Đường dẫn <span class="m--font-danger">*</span>
                            </label>
                            <div class="col-lg-6">
                                <input id="chapter_slug" name="chapter_slug" type="text" class="form-control m-input" placeholder="Nhập đường dẫn" value="{{ $chapter->chapter_slug }}" >
                                <span class="m--font-danger chapter_slug_error m--hide"></span>
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label class="col-lg-2 col-form-label">
                                <div class="view_create_div_chapter">
                                    <label for="view_create_input_chapter">
                                        <span class="btn btn-accent m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill">
                                        <span>
                                            <i class="la la-plus-circle"></i>
                                            <span>
                                                Thêm ảnh
                                            </span>
                                        </span>
                                        </span>
                                    </label>
                                    <input id="view_create_input_chapter" name="manga_cover" type="file" class="form-control m-input m--hide" accept="" multiple>
                                </div>
                                <button type="button" id="button_sort_chapter" class="btn btn-success m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill m--hide">Lưu vị trí</button>
                            </label>
                            <div class="col-lg-6">
                                <div class="row" id="div_chapter" >
                                    @foreach($chapter_mangas as $chapter_manga)
                                    <div class="col-2 text-center div_chapter_img" data="{{ $chapter_manga->chapter_image_name }}" >
                                        <img onload="loadImg()" id="div_chapter_img_{{ $chapter_manga->id }}" class="m--margin-top-5 m--margin-bottom-5" src="" width="100%" height="119" alt="{{ $chapter_manga->chapter_image_name }}">
                                        <button onclick="removeImage(this)" data="0" type="button" class="btn-custom">
                                            <i class="fa fa-remove"></i>
                                        </button>
                                    </div>
                                    @endforeach
                                </div>
                            </div>

                        </div>
                        <div class="form-group m-form__group row">
                            <label class="col-lg-2 col-form-label">
                                Chú thích chương
                            </label>
                            <div class="col-lg-6">
                                <textarea id="chapter_description" name="chapter_description" maxlength="500" rows="10" class="form-control">{{ $chapter->chapter_description }}</textarea>
                                <span class="m--font-danger chapter_description_error m--hide"></span>
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label class="col-lg-2 col-form-label">
                                Trạng thái <span class="m--font-danger">*</span>
                            </label>
                            <div class="col-lg-6">
                                <div class="m-radio-inline">
                                    <label class="m-radio m-radio--success">
                                        <input type="radio" id="chapter_status" name="chapter_status" value="1" {{ $chapter->chapter_status == 1 ? "checked":"" }}>
                                        Xuất bản
                                        <span></span>
                                    </label>
                                    <label class="m-radio m-radio--danger">
                                        <input type="radio" id="chapter_status" name="chapter_status" value="2" {{ $chapter->chapter_status == 2 ? "checked":"" }}>
                                        Bản nháp
                                        <span></span>
                                    </label>
                                </div>
                                <span class="m--font-danger chapter_status_error m--hide"></span>
                            </div>
                        </div>
                    </div>
                    <div class="m-portlet__foot m-portlet__no-border m-portlet__foot--fit">
                        <div class="m-form__actions m-form__actions--solid">
                            <div class="row">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-6">
                                    <button type="submit" class="btn btn-primary">
                                        Lưu lại
                                    </button>
                                    <button type="reset" class="btn btn-secondary">
                                        Hủy bỏ
                                    </button>
                                </div>
                                <div class="col-lg-4 m--align-right">
                                    <a href="{{ route('panel.deleteChapter',['id'=>$chapter->id]) }}" class="btn btn-danger">
                                        Xóa
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{ csrf_field() }}
                    <input type="hidden" id="chapter_id" name="chapter_id" value="{{ $chapter->id }}">
                    <input type="hidden" id="chapter_path" value="{{ $chapter->chapter_path }}">
                    <input type="hidden" id="chapter_img_arr" value="{{ $chapter_mangas }}" >
                </form>
                <!--end::Form-->
            </div>
        </div>
    </div>
    <input type="hidden" id="routeGetSlugChapter" value="{{ route('panel.getSlugChapter') }}">
    <input type="hidden" id="routeAjaxChapter" value="{{ route('panel.ajaxChapter') }}">
    <input type="hidden" id="routeAjaxStoreChapter" value="{{ route('panel.ajaxStoreChapter') }}">
@endsection