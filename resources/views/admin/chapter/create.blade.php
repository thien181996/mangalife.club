@extends('admin.layouts.main')
@section('title','Thêm Chương')
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
                                Thêm Chương
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
                                        <option value="{{ $manga->id }}" {{ old('manga_id') == $manga->id ? "selected" : "" }}>{{ $manga->manga_name }}</option>
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
                                <input id="chapter_name" name="chapter_name" type="text" class="form-control m-input" placeholder="Nhập tên Chương" value="{{ old('chapter_name') }}">
                                @if(count($errors) > 0)
                                    <span class="m--font-danger">
                                        {{$errors->first('chapter_name')}}
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label class="col-lg-2 col-form-label">
                                Đường dẫn <span class="m--font-danger">*</span>
                            </label>
                            <div class="col-lg-6">
                                <input id="chapter_slug" name="chapter_slug" type="text" class="form-control m-input" placeholder="Nhập đường dẫn" value="{{ old('chapter_slug') }}" >
                                @if(count($errors) > 0)
                                    <span class="m--font-danger">
                                        {{$errors->first('chapter_slug')}}
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label class="col-lg-2 col-form-label">
                                Chú thích chương
                            </label>
                            <div class="col-lg-6">
                                <textarea id="chapter_description" name="chapter_description" maxlength="500" rows="10" class="form-control">{{ old('chapter_description') }}</textarea>
                                @if(count($errors) > 0)
                                    <span class="m--font-danger">
                                        {{$errors->first('chapter_description')}}
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
                                        <input type="radio" name="chapter_status" value="1" {{ old('chapter_status') == 1 ? "checked":"" }}>
                                        Xuất bản
                                        <span></span>
                                    </label>
                                    <label class="m-radio m-radio--danger">
                                        <input type="radio" name="chapter_status" value="2" {{ old('chapter_status') == 2 ? "checked":"" }}>
                                        Bản nháp
                                        <span></span>
                                    </label>
                                </div>
                                @if(count($errors) > 0)
                                    <span class="m--font-danger">
                                        {{$errors->first('chapter_status')}}
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
                            </div>
                        </div>
                    </div>
                    {{ csrf_field() }}
                </form>
                <!--end::Form-->
            </div>
        </div>
    </div>
    <input type="hidden" id="routeGetSlugChapter" value="{{ route('panel.getSlugChapter') }}">
@endsection