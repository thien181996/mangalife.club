@extends('admin.layouts.main')
@section('title','Thêm tác giả')
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
                                Thêm tác giả
                            </h3>
                        </div>
                    </div>
                </div>
                <!--begin::Form-->
                <form class="m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed" action="{{ route('panel.storeAuthor') }}" method="post" enctype="multipart/form-data">
                    <div class="m-portlet__body">
                        <div class="form-group m-form__group row">
                            <div class="col-lg-3 m--align-center">
                                <label>
                                    Ảnh bìa (360x360)
                                </label>
                                <div class="view_create_div_author_cover">
                                    <label for="view_create_input_author_cover">
                                        <img style="max-height: 360px" id="view_create_img_author_cover" src="{{ asset('uploads/default_image/default-image.jpg') }}" width="100%" alt="Author Cover">
                                    </label>
                                    <input id="view_create_input_author_cover" name="author_cover" type="file" class="form-control m-input m--hide" accept="image/*">
                                </div>
                                @if(count($errors) > 0)
                                    <span class="m--font-danger">
                                        {{$errors->first('author_cover')}}
                                    </span>
                                @endif
                            </div>
                            <div class="col-lg-9">
                                <label class="">
                                    Tóm tắt nội dung
                                </label>
                                <div class="input-group m-input-group">
                                    <textarea id="author_description" name="author_description" class="form-control" maxlength="500" placeholder="Nhập nội dung tóm tắt về tác giả" rows="11">{{ old('author_description') }}</textarea>
                                </div>
                                @if(count($errors) > 0)
                                    <span class="m--font-danger">
                                        {{$errors->first('author_description')}}
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <div class="col-lg-12">
                                <label>
                                    Tên tác giả <span class="m--font-danger">*</span>
                                </label>
                                <input id="author_name" name="author_name" type="text" class="form-control m-input" placeholder="Nhập tên tác giả" value="{{ old('author_name') }}">
                                @if(count($errors) > 0)
                                    <span class="m--font-danger">
                                        {{$errors->first('author_name')}}
                                    </span>
                                @endif
                            </div>
                            <div class="col-lg-12">
                                <label class="">
                                    Đường dẫn <span class="m--font-danger">*</span>
                                </label>
                                <input id="author_slug" name="author_slug" type="text" class="form-control m-input" placeholder="Nhập đường dẫn" value="{{ old('author_slug') }}" >
                                @if(count($errors) > 0)
                                    <span class="m--font-danger">
                                        {{$errors->first('author_slug')}}
                                    </span>
                                @endif
                            </div>
                            <div class="col-lg-12">
                                <label class="">
                                    Liên kết
                                </label>
                                <div class="input-group m-input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            http://
                                        </span>
                                    </div>
                                    <input name="author_url" type="text" class="form-control m-input" placeholder="Nhập địa chỉ tới tác giả" value="{{ old('author_url') }}">
                                </div>
                                @if(count($errors) > 0)
                                    <span class="m--font-danger">
                                        {{$errors->first('author_url')}}
                                    </span>
                                @endif
                            </div>
                        </div>

                    </div>
                    <div class="m-portlet__foot m-portlet__no-border m-portlet__foot--fit">
                        <div class="m-form__actions m-form__actions--solid">
                            <div class="row">
                                <div class="col-lg-6">
                                    <button type="submit" class="btn btn-primary">
                                        Thêm mới
                                    </button>
                                    <a href="{{ route('panel.listAuthor') }}" class="btn btn-secondary">
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
    <input type="hidden" id="routeGetSlugAuthor" value="{{ route('panel.getSlugAuthor') }}">
@endsection