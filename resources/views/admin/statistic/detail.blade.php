@extends('admin.layouts.main')
@section('title','Thống kê Request')
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
                                Thống kê Request
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

                        </div>
                        <div class="col-lg-4 m--align-right">

                        </div>
                    </div>

                    <table class="table table-striped">
                        <thead>
                        <tr class="m--font-transform-u m--font-boldest">
                            <th scope="col">Token</th>
                            <th scope="col">Target</th>
                            <th scope="col">Người truy cập</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($result as $item)
                            <tr>
                                <td>{{ $item->token }}</td>
                                <td>{{ $item->target }}</td>
                                <td>{{ $item->getUserEmail() }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{ $result->appends(['statistic_id'=>$statistic_id])->links() }}
                </div>
            </div>
            <!--end::Portlet-->
        </div>
    </div>
@endsection