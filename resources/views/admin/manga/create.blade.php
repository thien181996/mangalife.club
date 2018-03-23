@extends('admin.layouts.main')
@section('title','Thêm Manga')
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
                                Thêm Manga
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
                                <input id="manga_name" name="manga_name" type="text" class="form-control m-input" placeholder="Nhập tên Manga" value="{{ old('manga_name') }}">
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
                                <input id="manga_slug" name="manga_slug" type="text" class="form-control m-input" placeholder="Nhập đường dẫn" value="{{ old('manga_slug') }}" >
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
                                        <img style="max-height: 360px" id="view_create_img_manga_cover" src="{{ asset('uploads/default_image/default-image.jpg') }}" width="100%" alt="Manga Cover">
                                    </label>
                                    <input id="view_create_input_manga_cover" name="manga_cover" type="file" class="form-control m-input m--hide" accept="image/jpeg, image/png">
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
                                <textarea id="manga_description" name="manga_description" maxlength="500" rows="10" class="form-control">{{ old('manga_description') }}</textarea>
                                @if(count($errors) > 0)
                                    <span class="m--font-danger">
                                        {{$errors->first('manga_description')}}
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label class="col-lg-2 col-form-label">
                                Trạng thái <span class="m--font-danger">*</span>
                            </label>
                            <div class="col-lg-6">
                                <div class="m-radio-inline">
                                    <label class="m-radio m-radio--success">
                                        <input type="radio" name="manga_status" value="1" {{ old('manga_status') == 1 ? "checked":"" }}>
                                        Xuất bản
                                        <span></span>
                                    </label>
                                    <label class="m-radio m-radio--danger">
                                        <input type="radio" name="manga_status" value="2" {{ old('manga_status') == 2 ? "checked":"" }}>
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
                                        Thêm mới
                                    </button>
                                    <a href="{{ route('panel.listManga') }}" class="btn btn-secondary">
                                        Hủy bỏ
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{ csrf_field() }}
                </form>
                <!--end::Form-->
            </div>
        </div>
    </div>
    <input type="hidden" id="routeGetSlugManga" value="{{ route('panel.getSlugManga') }}">
@endsection