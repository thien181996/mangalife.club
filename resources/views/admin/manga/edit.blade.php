@extends('admin.layouts.main')
@section('title','Chỉnh sửa Manga')
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
                                Chỉnh sửa Manga
                            </h3>
                        </div>
                    </div>
                </div>
                <!--begin::Form-->
                <form class="m-form m-form--fit m-form--label-align-right m-form--group-seperator" action="{{ route('panel.storeManga') }}" method="post" enctype="multipart/form-data">
                    <div class="m-portlet__body">
                        <div class="form-group m-form__group row">
                            <label class="col-lg-2 col-form-label">
                                Tên Manga <span class="m--font-danger">*</span>
                            </label>
                            <div class="col-lg-6">
                                <input id="manga_name" name="manga_name" type="text" class="form-control m-input" placeholder="Nhập tên Manga" value="{{ $manga->manga_name }}">
                                @if(count($errors) > 0)
                                    <span class="m--font-danger">
                                        {{$errors->first('manga_name')}}
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label class="col-lg-2 col-form-label">
                                Đường dẫn <span class="m--font-danger">*</span>
                            </label>
                            <div class="col-lg-6">
                                <input id="manga_slug" name="manga_slug" type="text" class="form-control m-input" placeholder="Nhập đường dẫn" value="{{ $manga->manga_slug }}" >
                                @if(count($errors) > 0)
                                    <span class="m--font-danger">
                                        {{$errors->first('manga_slug')}}
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label class="col-lg-2 col-form-label">
                                Ảnh bìa
                            </label>
                            <div class="col-lg-3 text-center">
                                <div class="view_create_div_manga_cover">
                                    <label for="view_create_input_manga_cover">
                                        <p>Kích thước chuẩn 360x360</p>
                                        <img style="max-height: 360px" id="view_create_img_manga_cover" src="{{ asset('panel/manga/stream/' . $manga->manga_path . '/' . $manga->manga_cover) }}" width="100%" alt="{{ $manga->manga_name }}">
                                    </label>
                                    <input id="view_create_input_manga_cover" name="manga_cover" type="file" class="form-control m-input m--hide" accept="">
                                </div>
                                @if(count($errors) > 0)
                                    <span class="m--font-danger">
                                        {{$errors->first('manga_cover')}}
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label class="col-lg-2 col-form-label">
                                Tóm tắt truyện
                            </label>
                            <div class="col-lg-6">
                                <textarea id="manga_description" name="manga_description" maxlength="500" rows="10" class="form-control">{{ $manga->manga_description }}</textarea>
                                @if(count($errors) > 0)
                                    <span class="m--font-danger">
                                        {{$errors->first('manga_description')}}
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label class="col-lg-2 col-form-label">
                                Tác giả
                            </label>
                            <div class="col-lg-6 div_author">
                                <select class="form-control m-input" id="author_id" multiple>
                                    @foreach($authors as $author)
                                        <option value="{{ $author->id }}" @if(in_array($author->id,$arr_authors)) selected  @endif >{{ $author->author_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-lg-2">
                                <a href="{{ route('panel.createAuthor') }}" target="_blank" class="btn btn-success m-btn m-btn--icon btn-sm m-btn--icon-only">
                                    <i class="fa fa-plus"></i>
                                </a>
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label class="col-lg-2 col-form-label">
                                Thể loại
                            </label>
                            <div class="col-lg-6 div_category">
                                <select class="form-control m-input" id="category_id" multiple>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}" @if(in_array($category->id,$arr_categories)) selected  @endif >{{ $category->category_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-lg-2">
                                <a href="{{ route('panel.createCategory') }}" target="_blank" class="btn btn-success m-btn m-btn--icon btn-sm m-btn--icon-only">
                                    <i class="fa fa-plus"></i>
                                </a>
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label class="col-lg-2 col-form-label">
                                Nhóm dịch
                            </label>
                            <div class="col-lg-6 div_group">
                                <select class="form-control m-input" id="group_id" multiple>
                                    @foreach($translate_groups as $translate_group)
                                        <option value="{{ $translate_group->id }}" @if(in_array($translate_group->id,$arr_groups)) selected  @endif >{{ $translate_group->group_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-lg-2">
                                <a href="{{ route('panel.createTranslateGroup') }}" target="_blank" class="btn btn-success m-btn m-btn--icon btn-sm m-btn--icon-only">
                                    <i class="fa fa-plus"></i>
                                </a>
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label class="col-lg-2 col-form-label">
                                Trạng thái <span class="m--font-danger">*</span>
                            </label>
                            <div class="col-lg-6">
                                <div class="m-radio-inline">
                                    <label class="m-radio m-radio--success">
                                        <input type="radio" name="manga_status" value="1" {{ $manga->manga_status == 1 ? "checked":"" }}>
                                        Xuất bản
                                        <span></span>
                                    </label>
                                    <label class="m-radio m-radio--danger">
                                        <input type="radio" name="manga_status" value="2" {{ $manga->manga_status == 2 ? "checked":"" }}>
                                        Bản nháp
                                        <span></span>
                                    </label>
                                </div>
                                @if(count($errors) > 0)
                                    <span class="m--font-danger">
                                        {{$errors->first('manga_status')}}
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="m-portlet__foot m-portlet__no-border m-portlet__foot--fit">
                        <div class="m-form__actions m-form__actions--solid">
                            <div class="row">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-6">
                                    <button type="submit" class="btn btn-primary">
                                        Lưu thay đổi
                                    </button>
                                    <button type="reset" class="btn btn-secondary">
                                        Hủy bỏ
                                    </button>
                                </div>
                                <div class="col-lg-4 m--align-right">
                                    <a href="#" class="btn btn-danger">
                                        Xóa
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{ csrf_field() }}
                    <input type="hidden" name="manga_id" id="manga_id" value="{{ $manga->id }}">
                </form>
                <!--end::Form-->
            </div>
        </div>
    </div>
    <input type="hidden" id="routeGetSlugManga" value="{{ route('panel.getSlugManga') }}">
    <input type="hidden" id="routeAjaxManga" value="{{ route('panel.ajaxManga') }}">
@endsection