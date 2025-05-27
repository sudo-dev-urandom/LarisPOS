@extends('partials.dashboard-admin')
@section('content')
<!-- BEGIN #content -->
<div id="content" class="app-content">
    <!-- BEGIN row -->
    <div class="row">
        <!-- BEGIN col-3 -->
        <div class="col-xl-3 col-lg-6">
            <!-- BEGIN card -->
            <div class="card mb-3">
                <!-- BEGIN card-body -->
                <div class="card-body">
                    <!-- BEGIN title -->
                    <div class="d-flex fw-bold small mb-3">
                        <span class="flex-grow-1">Total trx amount today</span>
                        <a href="#" data-toggle="card-expand" class="text-inverse text-opacity-50 text-decoration-none"><i class="bi bi-fullscreen"></i></a>
                    </div>
                    <!-- END title -->
                    <!-- BEGIN stat-lg -->
                    <div class="row align-items-center mb-2">
                        <div class="col-7">
                            <h3 class="mb-0">{{ format_currency(\App\Models\Transaction::whereDate('transaction_date', today())->sum('total_price')) }}</h3>
                        </div>
                        <div class="col-5">
                            <div class="mt-n2" data-render="apexchart" data-type="bar" data-title="Transactions" data-height="30"></div>
                        </div>
                    </div>
                    <!-- END stat-lg -->
                    <!-- BEGIN stat-sm -->
                    <!-- <div class="small text-inverse text-opacity-50 text-truncate">
                            <i class="fa fa-chevron-up fa-fw me-1"></i> 33.3% more than last week<br>
                            <i class="far fa-user fa-fw me-1"></i> 45.5% new visitors<br>
                            <i class="far fa-times-circle fa-fw me-1"></i> 3.25% bounce rate
                        </div> -->
                    <!-- END stat-sm -->
                </div>
                <!-- END card-body -->

                <!-- BEGIN card-arrow -->
                <div class="card-arrow">
                    <div class="card-arrow-top-left"></div>
                    <div class="card-arrow-top-right"></div>
                    <div class="card-arrow-bottom-left"></div>
                    <div class="card-arrow-bottom-right"></div>
                </div>
                <!-- END card-arrow -->
            </div>
            <!-- END card -->
        </div>
        <!-- END col-3 -->

        <!-- BEGIN col-3 -->
        <div class="col-xl-3 col-lg-6">
            <!-- BEGIN card -->
            <div class="card mb-3">
                <!-- BEGIN card-body -->
                <div class="card-body">
                    <!-- BEGIN title -->
                    <div class="d-flex fw-bold small mb-3">
                        <span class="flex-grow-1">Number of trx today</span>
                        <a href="#" data-toggle="card-expand" class="text-inverse text-opacity-50 text-decoration-none"><i class="bi bi-fullscreen"></i></a>
                    </div>
                    <!-- END title -->
                    <!-- BEGIN stat-lg -->
                    <div class="row align-items-center mb-2">
                        <div class="col-7">
                            <h3 class="mb-0">{{ \App\Models\Transaction::whereDate('transaction_date', today())->count() }}</h3>
                        </div>
                        <div class="col-5">
                            <div class="mt-n2" data-render="apexchart" data-type="line" data-title="Transactions" data-height="30"></div>
                        </div>
                    </div>
                    <!-- END stat-lg -->
                    <!-- BEGIN stat-sm -->
                    <!-- <div class="small text-inverse text-opacity-50 text-truncate">
                            <i class="fa fa-chevron-up fa-fw me-1"></i> 20.4% more than last week<br>
                            <i class="fa fa-shopping-bag fa-fw me-1"></i> 33.5% new orders<br>
                            <i class="fa fa-dollar-sign fa-fw me-1"></i> 6.21% conversion rate
                        </div> -->
                    <!-- END stat-sm -->
                </div>
                <!-- END card-body -->

                <!-- BEGIN card-arrow -->
                <div class="card-arrow">
                    <div class="card-arrow-top-left"></div>
                    <div class="card-arrow-top-right"></div>
                    <div class="card-arrow-bottom-left"></div>
                    <div class="card-arrow-bottom-right"></div>
                </div>
                <!-- END card-arrow -->
            </div>
            <!-- END card -->
        </div>
        <!-- END col-3 -->

        <!-- BEGIN col-3 -->
        <div class="col-xl-3 col-lg-6">
            <!-- BEGIN card -->
            <div class="card mb-3">
                <!-- BEGIN card-body -->
                <div class="card-body">
                    <!-- BEGIN title -->
                    <div class="d-flex fw-bold small mb-3">
                        <span class="flex-grow-1">Total trx amount all time</span>
                        <a href="#" data-toggle="card-expand" class="text-inverse text-opacity-50 text-decoration-none"><i class="bi bi-fullscreen"></i></a>
                    </div>
                    <!-- END title -->
                    <!-- BEGIN stat-lg -->
                    <div class="row align-items-center mb-2">
                        <div class="col-7">
                            <h3 class="mb-0">{{ format_currency(\App\Models\Transaction::sum('total_price')) }}</h3>
                        </div>
                        <div class="col-5">
                            <div class="mt-n3 mb-n2" data-render="apexchart" data-type="pie" data-title="Transactions" data-height="45"></div>
                        </div>
                    </div>
                    <!-- END stat-lg -->
                    <!-- BEGIN stat-sm -->
                    <!-- <div class="small text-inverse text-opacity-50 text-truncate">
                            <i class="fa fa-chevron-up fa-fw me-1"></i> 59.5% more than last week<br>
                            <i class="fab fa-facebook-f fa-fw me-1"></i> 45.5% from facebook<br>
                            <i class="fab fa-youtube fa-fw me-1"></i> 15.25% from youtube
                        </div> -->
                    <!-- END stat-sm -->
                </div>
                <!-- END card-body -->

                <!-- BEGIN card-arrow -->
                <div class="card-arrow">
                    <div class="card-arrow-top-left"></div>
                    <div class="card-arrow-top-right"></div>
                    <div class="card-arrow-bottom-left"></div>
                    <div class="card-arrow-bottom-right"></div>
                </div>
                <!-- END card-arrow -->
            </div>
            <!-- END card -->
        </div>
        <!-- END col-3 -->

        <!-- BEGIN col-3 -->
        <div class="col-xl-3 col-lg-6">
            <!-- BEGIN card -->
            <div class="card mb-3">
                <!-- BEGIN card-body -->
                <div class="card-body">
                    <!-- BEGIN title -->
                    <div class="d-flex fw-bold small mb-3">
                        <span class="flex-grow-1">Number of trx all time</span>
                        <a href="#" data-toggle="card-expand" class="text-inverse text-opacity-50 text-decoration-none"><i class="bi bi-fullscreen"></i></a>
                    </div>
                    <!-- END title -->
                    <!-- BEGIN stat-lg -->
                    <div class="row align-items-center mb-2">
                        <div class="col-7">
                            <h3 class="mb-0">{{ \App\Models\Transaction::count() }}</h3>
                        </div>
                        <div class="col-5">
                            <div class="mt-n3 mb-n2" data-render="apexchart" data-type="donut" data-title="Transactions" data-height="45"></div>
                        </div>
                    </div>
                    <!-- END stat-lg -->
                    <!-- BEGIN stat-sm -->
                    <!-- <div class="small text-inverse text-opacity-50 text-truncate">
                            <i class="fa fa-chevron-up fa-fw me-1"></i> 5.3% more than last week<br>
                            <i class="far fa-hdd fa-fw me-1"></i> 10.5% from total usage<br>
                            <i class="far fa-hand-point-up fa-fw me-1"></i> 2MB per visit
                        </div> -->
                    <!-- END stat-sm -->
                </div>
                <!-- END card-body -->

                <!-- BEGIN card-arrow -->
                <div class="card-arrow">
                    <div class="card-arrow-top-left"></div>
                    <div class="card-arrow-top-right"></div>
                    <div class="card-arrow-bottom-left"></div>
                    <div class="card-arrow-bottom-right"></div>
                </div>
                <!-- END card-arrow -->
            </div>
            <!-- END card -->
        </div>
        <!-- END col-3 -->

        <!-- BEGIN col-6 -->
        <div class="col-xl-6">
            <!-- BEGIN card -->
            <div class="card mb-3">
                <!-- BEGIN card-body -->
                <div class="card-body">
                    <!-- BEGIN title -->
                    <div class="d-flex fw-bold small mb-3">
                        <span class="flex-grow-1">Top-selling products per month</span>
                        <a href="#" data-toggle="card-expand" class="text-inverse text-opacity-50 text-decoration-none"><i class="bi bi-fullscreen"></i></a>
                    </div>
                    <!-- END title -->
                    <!-- BEGIN table -->
                    <div class="table-responsive">
                        <table class="w-100 mb-0 small align-middle text-nowrap">
                            <tbody>
                                @php
                                    $topProducts = App\Models\TransactionItem::with('inventory')
                                        ->select('inventory_id',
                                                DB::raw('SUM(quantity) as total_quantity'),
                                                DB::raw('SUM(total_price) as total_revenue'),
                                                DB::raw('SUM(total_price - (quantity * unit_price)) as total_profit'))
                                        ->groupBy('inventory_id')
                                        ->orderBy('total_quantity', 'desc')
                                        ->take(5)
                                        ->get();
                                @endphp
                                @foreach($topProducts as $index => $item)
                                    <tr>
                                        <td>
                                            <div class="d-flex mb-2 align-items-center">
                                                <div class="position-relative">
                                                    <div class="bg-position-center bg-size-cover bg-repeat-no-repeat w-80px h-60px" style="background-image: url('{{ asset($item->inventory->images) }}');">
                                                    </div>
                                                    <div class="position-absolute top-0 start-0">
                                                        <span class="badge {{ $index < 3 ? 'bg-theme text-theme-900' : 'bg-black bg-opacity-50' }} rounded-0 d-flex align-items-center justify-content-center w-20px h-20px">{{ $index + 1 }}</span>
                                                    </div>
                                                </div>
                                                <div class="flex-1 ps-3">
                                                    <div class="mb-1"><small class="fs-9px fw-500 lh-1 d-inline-block rounded-0 badge bg-secondary bg-opacity-25 text-inverse text-opacity-75 pt-5px">{{ $item->inventory->sku }}</small></div>
                                                    <div class="text-inverse fw-500">{{ $item->inventory->name }}</div>
                                                    {{ format_currency($item->inventory->price) }}
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <table class="mb-2">
                                                <tr>
                                                    <td class="pe-3">QTY:</td>
                                                    <td class="text-inverse text-opacity-75 fw-500">{{ number_format($item->total_quantity) }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="pe-3">REVENUE:</td>
                                                    <td class="text-inverse text-opacity-75 fw-500">{{ format_currency($item->total_revenue) }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="pe-3 text-nowrap">PROFIT:</td>
                                                    <td class="text-inverse text-opacity-75 fw-500">{{ format_currency($item->total_profit) }}</td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td><a href="#" class="text-decoration-none text-inverse"><i class="bi bi-search"></i></a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- END table -->
                </div>
                <!-- END card-body -->

                <!-- BEGIN card-arrow -->
                <div class="card-arrow">
                    <div class="card-arrow-top-left"></div>
                    <div class="card-arrow-top-right"></div>
                    <div class="card-arrow-bottom-left"></div>
                    <div class="card-arrow-bottom-right"></div>
                </div>
                <!-- END card-arrow -->
            </div>
            <!-- END card -->
        </div>
        <!-- END col-6 -->

        <!-- BEGIN col-6 -->
        <div class="col-xl-6">
            <!-- BEGIN card -->
            <div class="card mb-3">
                <!-- BEGIN card-body -->
                <div class="card-body">
                    <!-- BEGIN title -->
                    <div class="d-flex fw-bold small mb-3">
                        <span class="flex-grow-1">Transaction log today by 10 recently </span>
                        <a href="#" data-toggle="card-expand" class="text-inverse text-opacity-50 text-decoration-none"><i class="bi bi-fullscreen"></i></a>
                    </div>
                    <!-- END title -->
                    <!-- BEGIN table -->
                    <div class="table-responsive">
                        <table class="table table-striped table-borderless mb-2px small text-nowrap">
                            <tbody>
                                @php
                                    $recentTransactions = App\Models\Transaction::with('cashier')
                                        ->orderBy('transaction_date', 'desc')
                                        ->take(10)
                                        ->get();
                                @endphp
                                @foreach($recentTransactions as $transaction)
                                    <tr>
                                        <td>
                                            <span class="d-flex align-items-center">
                                                <i class="bi bi-circle-fill fs-6px {{ $transaction->is_paid ? 'text-theme' : 'text-inverse-transparent-3' }} me-2"></i>
                                                {{ $transaction->cashier->name }} - {{ format_currency($transaction->total_price) }}
                                            </span>
                                        </td>
                                        <td><small>{{ $transaction->transaction_date->diffForHumans() }}</small></td>
                                        <td>
                                            <span class="badge d-block {{ $transaction->is_paid ? 'bg-theme text-theme-900' : 'text-inverse bg-secondary bg-opacity-25' }} rounded-0 pt-5px w-70px" style="min-height: 18px">
                                                {{ $transaction->payment_method }}
                                            </span>
                                        </td>
                                        <td>
                                            <a href="#" class="text-decoration-none text-inverse">
                                                <i class="bi bi-search"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- END table -->
                </div>
                <!-- END card-body -->

                <!-- BEGIN card-arrow -->
                <div class="card-arrow">
                    <div class="card-arrow-top-left"></div>
                    <div class="card-arrow-top-right"></div>
                    <div class="card-arrow-bottom-left"></div>
                    <div class="card-arrow-bottom-right"></div>
                </div>
                <!-- END card-arrow -->
            </div>
            <!-- END card -->
        </div>
        <!-- END col-6 -->
    </div>
    <!-- END row -->
</div>
<!-- END #content -->
@stop
@push('js')
<script src="{{ asset('assets/plugins/apexcharts/dist/apexcharts.min.js') }}"></script>
<script src="{{ asset('assets/js/demo/dashboard.demo.js') }}"></script>
@endpush
