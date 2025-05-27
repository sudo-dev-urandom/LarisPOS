@extends('partials.dashboard-admin')
@push('head')
<!-- ================== BEGIN page-css ================== -->
<link href="{{ asset('assets/plugins/datatables.net-bs5/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/plugins/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/plugins/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/plugins/bootstrap-table/dist/bootstrap-table.min.css') }}" rel="stylesheet">
<!-- ================== END page-css ================== -->
@endpush

@section('content')
<!-- BEGIN #content -->
<div id="content" class="app-content">
    <!-- BEGIN container -->
    <div class="container">
        <!-- BEGIN row -->
        <div class="row justify-content-center">
            <!-- BEGIN col-12 -->
            <div class="col-xl-12">
                <!-- BEGIN row -->
                <div class="row">
                    <!-- BEGIN col-12 -->
                    <div class="col-xl-12">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">TABLES</a></li>
                            <li class="breadcrumb-item active">TABLE Cashier</li>
                        </ul>

                        <h1 class="page-header">
                            Cashier <small>Account</small>
                        </h1>

                        <hr class="mb-4">

                        <!-- BEGIN #datatable -->
                        <div id="datatable" class="mb-5">
                            <div class="card">
                                <div class="card-body">
                                    <table id="datatableDefault" class="table text-nowrap w-100">
                                        <thead>
                                            <tr>

                                                <th>#ID</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Is Active</th>
                                                <th>Date Added</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($cashier as $value)
                                            <tr>

                                                <td>{{ $value->id}}</td>
                                                <td>{{ $value->name}}</td>
                                                <td>{{ $value->email }}</td>
                                                <td>@if ($value->is_active)
                                                    <span class="badge bg-success">Active</span>
                                                    @else
                                                    <span class="badge bg-danger">Inactive</span>
                                                    @endif
                                                </td>
                                                <td>{{ $value->created_at }}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- END #datatable -->


                    </div>
                    <!-- END col-12-->

                </div>
                <!-- END row -->
            </div>
            <!-- END col-12 -->
        </div>
        <!-- END row -->
    </div>
    <!-- END container -->
</div>
<!-- END #content -->
@stop

@push('js')
<script src="{{ asset('assets/plugins/@highlightjs/cdn-assets/highlight.min.js') }}"></script>
<script src="{{ asset('assets/js/demo/highlightjs.demo.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables.net/js/dataTables.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables.net-bs5/js/dataTables.bootstrap5.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables.net-buttons/js/buttons.colVis.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap-table/dist/bootstrap-table.min.js') }}"></script>
<script src="{{ asset('assets/js/demo/table-plugins.demo.js') }}"></script>
@endpush
