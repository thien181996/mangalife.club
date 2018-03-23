@extends('admin.layouts.main')
@section('title','Chỉnh sửa action')
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
                                Chỉnh sửa action - Module: {{ $action->module_id }}
                            </h3>
                        </div>
                    </div>
                </div>
                <!--begin::Form-->
                <form class="m-form m-form--fit m-form--label-align-right m-form--group-seperator" action="{{ route('panel.storeModuleAction') }}" method="post" enctype="multipart/form-data">
                    <div class="m-portlet__body">
                        <div class="form-group m-form__group row">
                            <label class="col-lg-2 col-form-label">
                                Tên action <span class="m--font-danger">*</span>
                            </label>
                            <div class="col-lg-6">
                                <input id="action_name" name="action_name" type="text" class="form-control m-input" placeholder="Nhập tên action" value="{{ $action->action_name }}">
                                @if(count($errors) > 0)
                                    <span class="m--font-danger">
                                        {{$errors->first('action_name')}}
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label class="col-lg-2 col-form-label">
                                Quyền truy cập
                            </label>
                            <div class="col-lg-6 div_set_role">
                                <select class="form-control m-input" id="roles" multiple>
                                    @foreach($roles as $role)
                                        <option value="{{ $role->id }}" @if(in_array($role->id,$access_arr)) selected  @endif >{{ $role->role_name }}</option>
                                    @endforeach
                                </select>
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
                    <input type="hidden" id="action_id" name="action_id" value="{{ $action->id }}">
                    <input type="hidden" id="module_id" name="module_id" value="{{ $action->module_id }}">
                </form>
                <!--end::Form-->
            </div>
        </div>
    </div>
@endsection
<input type="hidden" id="routeAjaxModuleAction" value="{{ route('panel.ajaxModuleAction') }}">