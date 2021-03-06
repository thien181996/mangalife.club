@extends('admin.layouts.main')
@section('title','Danh sách Báo cáo')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <!--begin::Portlet-->
            <div class="m-portlet m-portlet--head-sm" data-portlet="true" id="m_portlet_tools_3">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
						<span class="m-portlet__head-icon">
							<i class="flaticon-coins"></i>
						</span>
                            <h3 class="m-portlet__head-text">
                                Danh sách Báo cáo
                            </h3>
                        </div>
                    </div>
                    <div class="m-portlet__head-tools">
                        <ul class="m-portlet__nav">
                            <li class="m-portlet__nav-item">
                                <a href="#" data-portlet-tool="fullscreen" class="m-portlet__nav-link m-portlet__nav-link--icon" title="" data-original-title="Fullscreen"><i class="la la-expand"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="row">
                                <div class="col-lg-3">
                                    <select class="form-control m-input" name="user_id" id="user_id">
                                        <option value="0">-- Lựa chọn tài khoản --</option>
                                        @foreach($users as $user)
                                            <option value="{{ $user->id }}" {{ $user_id == $user->id ? "selected" : "" }}>{{ $user->username }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 m--align-right">

                        </div>
                    </div>

                    <table class="table table-striped">
                        <thead>
                        <tr class="m--font-transform-u m--font-boldest">
                            <th scope="col">Loại báo cáo</th>
                            <th scope="col">Nội dung</th>
                            <th scope="col">Tài khoản</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($reports as $report)
                            <tr>
                                <td>{{ $report->getReportName() }}</td>
                                <td>{{ $report->report_content }}</td>
                                <td>{{ $report->getUserEmail() }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{ $reports->appends(['user_id'=>$user_id])->links() }}
                </div>
            </div>
            <!--end::Portlet-->
        </div>
    </div>
@endsection
@section('js')
    <script>
        $('#user_id').on('select2:select', function (e) {
            let user_id = e.params.data.id;
            if(user_id != 0)
            {
                location.href = '?user_id=' + user_id;
            }
        });
    </script>
@endsection