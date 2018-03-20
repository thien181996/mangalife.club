@extends('admin.layouts.main')
@section('title','Chỉnh sửa tài khoản')
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
                                Chỉnh sửa tài khoản
                            </h3>
                        </div>
                    </div>
                </div>
                <!--begin::Form-->
                <form class="m-form m-form--fit m-form--label-align-right m-form--group-seperator" action="{{ route('panel.storeUser') }}" method="post" enctype="multipart/form-data">
                    <div class="m-portlet__body">
                        <div class="form-group m-form__group row">
                            <label class="col-lg-2 col-form-label">
                                Tên thành viên <span class="m--font-danger">*</span>
                            </label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control m-input" disabled="disabled" placeholder="{{ $user->username }}">
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label class="col-lg-2 col-form-label">
                                Địa chỉ Email <span class="m--font-danger">*</span>
                            </label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control m-input" disabled="disabled" placeholder="{{ $user->email }}">
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label class="col-lg-2 col-form-label">
                                Mật khẩu
                            </label>
                            <div class="col-lg-6">
                                <div class="m-input-icon m-input-icon--right">
                                    <input id="password" name="password" type="password" maxlength="50" class="form-control m-input" placeholder="Nhập mật khẩu muốn khôi phục" value="">
                                    <span class="m-input-icon__icon m-input-icon__icon--right">
                                        <span>
                                            <i class="la la-eye" onclick="togglePassword(this)"></i>
                                        </span>
                                    </span>
                                </div>

                                @if(count($errors) > 0)
                                    <span class="m--font-danger">
                                        {{$errors->first('password')}}
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label class="col-lg-2 col-form-label">
                                Loại tài khoản
                            </label>
                            <div class="col-lg-6">
                                <select class="form-control m-input" name="role_id" id="role_id">
                                    @foreach($roles as $role)
                                        <option value="{{ $role->id }}" {{ $user->role_id == $role->id ? "selected" : "" }}>{{ $role->role_name }}</option>
                                    @endforeach
                                </select>

                                @if(count($errors) > 0)
                                    <span class="m--font-danger">
                                        {{$errors->first('password')}}
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
                                <div class="col-lg-4 m--align-right">
                                    <a href="#" class="btn btn-danger">
                                        Xóa
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{ csrf_field() }}
                    <input type="hidden" name="user_id" value="{{ $user->id }}">
                </form>
                <!--end::Form-->
            </div>
        </div>
    </div>
@endsection