@extends('partials.dashboard-admin')
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
                            <li class="breadcrumb-item active">TABLE TRANSACTIONS</li>
                        </ul>

                        <h1 class="page-header">
                            Transactions <small>By Today</small>
                        </h1>

                        <hr class="mb-4">

                        <!-- BEGIN #datatable -->
                        <div id="datatable" class="mb-5">
                            <div class="card">
                                <div class="card-body">
                                    <table id="datatableDefault" class="table text-nowrap w-100">
                                        <thead>
                                            <tr>

                                                <th>#Invoice</th>
                                                <th>Transaction Date</th>
                                                <th>Cashier</th>
                                                <th>Payment Method</th>
                                                <th>Total</th>
                                                <th>Tax</th>
                                                <th>Subtotal</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($transactions as $value)
                                            <tr>

                                                <td>{{ $value->invoice_number}}</td>
                                                <td>{{ $value->transaction_date}}</td>
                                                <td>{{ $value->cashier->name }}</td>
                                                <td>{{ $value->payment_method }}</td>
                                                <td>{{ format_currency($value->total_price) }}</td>
                                                <td>{{ format_currency($value->tax) }}</td>
                                                <td>{{ format_currency($value->subtotal) }}</td>
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

@push('head')
<!-- ================== BEGIN page-css ================== -->
<link href="{{ asset('assets/plugins/datatables.net-bs5/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/plugins/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/plugins/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/plugins/bootstrap-table/dist/bootstrap-table.min.css') }}" rel="stylesheet">
<!-- ================== END page-css ================== -->
@endpush

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
