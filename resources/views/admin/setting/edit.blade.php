@extends('admin.layouts.main')
@section('title','Cấu hình website')
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
                                Cấu hình website
                            </h3>
                        </div>
                    </div>
                </div>
                <!--begin::Form-->
                <form class="m-form m-form--fit m-form--label-align-right m-form--group-seperator" action="{{ route('panel.storeSetting') }}" method="post" enctype="multipart/form-data">
                    <div class="m-portlet__body">
                        {{--<div class="form-group m-form__group row">--}}
                            {{--<label class="col-lg-2 col-form-label">--}}
                                {{--GOOGLE CLIENT ID--}}
                            {{--</label>--}}
                            {{--<div class="col-lg-6">--}}
                                {{--<input id="client_id" name="client_id" type="text" class="form-control m-input" placeholder="Nhập thông số client id google drive" value="{{ $settings->client_id }}">--}}
                                {{--@if(count($errors) > 0)--}}
                                    {{--<span class="m--font-danger">--}}
                                        {{--{{$errors->first('client_id')}}--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="form-group m-form__group row">--}}
                            {{--<label class="col-lg-2 col-form-label">--}}
                                {{--GOOGLE CLIENT SECRET--}}
                            {{--</label>--}}
                            {{--<div class="col-lg-6">--}}
                                {{--<input id="client_secret" name="client_secret" type="text" class="form-control m-input" placeholder="Nhập thông số client secret google drive" value="{{ $settings->client_secret }}">--}}
                                {{--@if(count($errors) > 0)--}}
                                    {{--<span class="m--font-danger">--}}
                                        {{--{{$errors->first('client_secret')}}--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="form-group m-form__group row">--}}
                            {{--<label class="col-lg-2 col-form-label">--}}
                                {{--GOOGLE CLIENT TOKEN--}}
                            {{--</label>--}}
                            {{--<div class="col-lg-6">--}}
                                {{--<input id="client_token" name="client_token" type="text" class="form-control m-input" placeholder="Nhập thông số client token google drive" value="{{ $settings->client_token }}">--}}
                                {{--@if(count($errors) > 0)--}}
                                    {{--<span class="m--font-danger">--}}
                                        {{--{{$errors->first('client_token')}}--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="form-group m-form__group row">--}}
                            {{--<label class="col-lg-2 col-form-label">--}}
                                {{--GOOGLE ROOT FOLDER--}}
                            {{--</label>--}}
                            {{--<div class="col-lg-6">--}}
                                {{--<input id="client_folder" name="client_folder" type="text" class="form-control m-input" placeholder="Nhập thông số root folder google drive" value="{{ $settings->client_folder }}">--}}
                                {{--@if(count($errors) > 0)--}}
                                    {{--<span class="m--font-danger">--}}
                                        {{--{{$errors->first('client_folder')}}--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        <div class="form-group m-form__group row">
                            <label class="col-lg-2 col-form-label">
                                Đường dẫn Ảnh Tác giả
                            </label>
                            <div class="col-lg-6">
                                <input id="path_author" name="path_author" type="text" class="form-control m-input" placeholder="Nhập đường dẫn chứa ảnh tác giả" value="{{ $settings->path_author }}">
                                @if(count($errors) > 0)
                                    <span class="m--font-danger">
                                        {{$errors->first('path_author')}}
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label class="col-lg-2 col-form-label">
                                Đường dẫn Ảnh Nhóm dịch
                            </label>
                            <div class="col-lg-6">
                                <input id="path_group" name="path_group" type="text" class="form-control m-input" placeholder="Nhập đường dẫn chứa ảnh nhóm dịch" value="{{ $settings->path_group }}">
                                @if(count($errors) > 0)
                                    <span class="m--font-danger">
                                        {{$errors->first('path_group')}}
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label class="col-lg-2 col-form-label">
                                Đường dẫn Ảnh Manga
                            </label>
                            <div class="col-lg-6">
                                <input id="path_manga" name="path_manga" type="text" class="form-control m-input" placeholder="Nhập đường dẫn chứa ảnh Manga" value="{{ $settings->path_manga }}">
                                @if(count($errors) > 0)
                                    <span class="m--font-danger">
                                        {{$errors->first('path_manga')}}
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
                                        Lưu chỉnh sửa
                                    </button>
                                    <button type="reset" class="btn btn-secondary">
                                        Hủy bỏ
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{ csrf_field() }}
                    <input type="hidden" name="setting_id" value="{{ $settings->id }}">
                </form>
                <!--end::Form-->
            </div>
        </div>
    </div>
@endsection