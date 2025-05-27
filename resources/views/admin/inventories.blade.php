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
                            <li class="breadcrumb-item active">TABLE INVENTORIES</li>
                        </ul>

                        <h1 class="page-header">
                            Inventories <small>Stock</small>
                        </h1>

                        <hr class="mb-4">

                        <!-- BEGIN #datatable -->
                        <div id="datatable" class="mb-5">
                            <div class="card">
                                <div class="card-body">
                                    <table id="datatableDefault" class="table text-nowrap w-100">
                                        <thead>
                                            <tr>

                                                <th>#SKU</th>
                                                <th>Name</th>
                                                <th>Tags</th>
                                                <th>Price</th>
                                                <th>Stock</th>
                                                <th>Image</th>
                                                <th>Date Added</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($inventories as $value)
                                            <tr>

                                                <td>{{ $value->sku}}</td>
                                                <td>{{ $value->name}}</td>
                                                <td>{{ $value->tags }}</td>
                                                <td>{{ format_currency($value->price) }}</td>
                                                <td>{{ $value->stocks }}</td>

                                                <td>
                                                    <div class="d-flex mb-2 align-items-center">
                                                        <div class="position-relative">
                                                            <div class="bg-position-center bg-size-cover bg-repeat-no-repeat w-80px h-60px" style="background-image: url('{{ asset($value->images) }}')">
                                                            </div>
                                                            <div class="position-absolute top-0 start-0">
                                                                <span class="badge bg-theme text-theme-900 rounded-0 d-flex align-items-center justify-content-center w-20px h-20px">{{ $value->stocks }}</span>
                                                            </div>
                                                        </div>
                                                        <div class="flex-1 ps-3">
                                                            <div class="mb-1"><small class="fs-9px fw-500 lh-1 d-inline-block rounded-0 badge bg-secondary bg-opacity-25 text-inverse text-opacity-75 pt-5px">{{ $value->sku}}</small></div>
                                                            <div class="text-inverse fw-500">{{ $value->name}}</div>
                                                            {{ format_currency($value->price) }}
                                                        </div>
                                                    </div>
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
