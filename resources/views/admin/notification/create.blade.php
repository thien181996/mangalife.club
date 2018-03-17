@extends('admin.layouts.main')
@section('title','Viết thông báo')
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
                                Viết thông báo
                            </h3>
                        </div>
                    </div>
                </div>
                <!--begin::Form-->
                <form class="m-form m-form--fit m-form--label-align-right m-form--group-seperator" action="{{ route('panel.storeNotification') }}" method="post" enctype="multipart/form-data">
                    <div class="m-portlet__body">
                        <div class="form-group m-form__group row">
                            <label class="col-lg-2 col-form-label">
                                Người nhận <span class="m--font-danger">*</span>
                            </label>
                            <div class="col-lg-6">
                                <select class="form-control m-input" name="user_id[]" id="user_id" multiple>
                                    @foreach($users as $user)
                                        <option value="{{ $user->id }}" {{ old('user_id') == $user->id ? "selected" : "" }}>{{ $user->username }}</option>
                                    @endforeach
                                </select>
                                @if(count($errors) > 0)
                                    <span class="m--font-danger">
                                        {{$errors->first('user_id')}}
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label class="col-lg-2 col-form-label">
                                Nội dung <span class="m--font-danger">*</span>
                            </label>
                            <div class="col-lg-6">
                                <textarea id="mailbox_content" name="mailbox_content" maxlength="500" rows="10" class="form-control">{{ old('mailbox_content') }}</textarea>
                                @if(count($errors) > 0)
                                    <span class="m--font-danger">
                                        {{$errors->first('mailbox_content')}}
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
                                        Gửi đi
                                    </button>
                                    <button type="reset" class="btn btn-secondary">
                                        Hủy bỏ
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{ csrf_field() }}
                    <input type="hidden" name="user_login" value="1">
                </form>
                <!--end::Form-->
            </div>
        </div>
    </div>
@endsection