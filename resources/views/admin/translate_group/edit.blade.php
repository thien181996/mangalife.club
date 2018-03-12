@extends('admin.layouts.main')
@section('title','Thông tin nhóm dịch')
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
                                Sửa thông tin nhóm dịch
                            </h3>
                        </div>
                    </div>
                </div>
                <!--begin::Form-->
                <form class="m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed" action="{{ route('panel.storeTranslateGroup') }}" method="post" enctype="multipart/form-data">
                    <div class="m-portlet__body">
                        <div class="form-group m-form__group row">
                            <div class="col-lg-3 m--align-center">
                                <label>
                                    Ảnh bìa (360x360)
                                </label>
                                <div class="view_create_div_group_cover">
                                    <label for="view_create_input_group_cover">
                                        <img style="max-height: 360px" id="view_create_img_group_cover" src="{{ asset('panel/translate_group/stream/1SAf73FFaIe04FZeHsVYqmQ7p2rM9htb8/' . $group->group_cover) }}" width="100%" alt="{{ $group->group_name }}">
                                    </label>
                                    <input id="view_create_input_group_cover" name="group_cover" type="file" class="form-control m-input m--hide" accept="">
                                </div>
                                @if(count($errors) > 0)
                                    <span class="m--font-danger">
                                        {{$errors->first('group_cover')}}
                                    </span>
                                @endif
                            </div>
                            <div class="col-lg-9">
                                <label class="">
                                    Tóm tắt nhóm dịch
                                </label>
                                <div class="input-group m-input-group">
                                    <textarea id="group_description" name="group_description" class="form-control" maxlength="500" placeholder="Nhập nội dung tóm tắt về nhóm dịch" rows="11">{{ $group->group_description }}</textarea>
                                </div>
                                @if(count($errors) > 0)
                                    <span class="m--font-danger">
                                        {{$errors->first('group_description')}}
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <div class="col-lg-12">
                                <label>
                                    Tên nhóm dịch *
                                </label>
                                <input id="group_name" name="group_name" type="text" class="form-control m-input" placeholder="Nhập tên nhóm dịch" value="{{ $group->group_name }}">
                                @if(count($errors) > 0)
                                    <span class="m--font-danger">
                                        {{$errors->first('group_name')}}
                                    </span>
                                @endif
                            </div>
                            <div class="col-lg-12">
                                <label class="">
                                    Đường dẫn *
                                </label>
                                <input id="group_slug" name="group_slug" type="text" class="form-control m-input" placeholder="Nhập đường dẫn" value="{{ $group->group_slug }}" >
                                @if(count($errors) > 0)
                                    <span class="m--font-danger">
                                        {{$errors->first('group_slug')}}
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
                                    <input name="group_url" type="text" class="form-control m-input" placeholder="Nhập địa chỉ tới nhóm dịch" value="{{ $group->group_url }}">
                                </div>
                                @if(count($errors) > 0)
                                    <span class="m--font-danger">
                                        {{$errors->first('group_url')}}
                                    </span>
                                @endif
                            </div>
                            <div class="col-lg-12">
                                <label class="">
                                    Tài khoản nhóm dịch *
                                </label>
                                <select class="form-control m-input" name="user_id" id="group_select_user">
                                    @foreach($users as $user)
                                        <option value="{{ $user->id }}" {{ $group->user_id == $user->id ? "selected" : "" }}>{{ $user->username }}</option>
                                    @endforeach
                                </select>
                                @if(count($errors) > 0)
                                    <span class="m--font-danger">
                                        {{$errors->first('user_id')}}
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
                                        Lưu lại
                                    </button>
                                    <button type="reset" class="btn btn-secondary">
                                        Hủy bỏ
                                    </button>
                                </div>
                                <div class="col-lg-6 m--align-right">
                                    <a href="{{ route('panel.deleteTranslateGroup',['id'=>$group->id]) }}" class="btn btn-danger">
                                        Xóa
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{ csrf_field() }}
                    <input type="hidden" name="group_id" value="{{ $group->id }}">
                </form>
                <!--end::Form-->
            </div>
        </div>
    </div>
    <input type="hidden" id="routeGetSlugTranslateGroup" value="{{ route('panel.getSlugTranslateGroup') }}">
@endsection