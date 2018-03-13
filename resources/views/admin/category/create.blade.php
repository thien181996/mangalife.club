@extends('admin.layouts.main')
@section('title','Thêm thể loại')
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
                                Thêm thể loại
                            </h3>
                        </div>
                    </div>
                </div>
                <!--begin::Form-->
                <form class="m-form m-form--fit m-form--label-align-right m-form--group-seperator" action="{{ route('panel.storeCategory') }}" method="post" enctype="multipart/form-data">
                    <div class="m-portlet__body">
                        <div class="form-group m-form__group row">
                            <label class="col-lg-2 col-form-label">
                                Tên thể loại <span class="m--font-danger">*</span>
                            </label>
                            <div class="col-lg-6">
                                <input id="category_name" name="category_name" type="text" class="form-control m-input" placeholder="Nhập tên thể loại" value="{{ old('category_name') }}">
                                @if(count($errors) > 0)
                                    <span class="m--font-danger">
                                        {{$errors->first('category_name')}}
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label class="col-lg-2 col-form-label">
                                Đường dẫn <span class="m--font-danger">*</span>
                            </label>
                            <div class="col-lg-6">
                                <input id="category_slug" name="category_slug" type="text" class="form-control m-input" placeholder="Nhập đường dẫn" value="{{ old('category_slug') }}" >
                                @if(count($errors) > 0)
                                    <span class="m--font-danger">
                                        {{$errors->first('category_slug')}}
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
                </form>
                <!--end::Form-->
            </div>
        </div>
    </div>
    <input type="hidden" id="routeGetSlugCategory" value="{{ route('panel.getSlugCategory') }}">
@endsection