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
                            <h3 class="mb-0">4.2m</h3>
                        </div>
                        <div class="col-5">
                            <div class="mt-n2" data-render="apexchart" data-type="bar" data-title="Visitors" data-height="30"></div>
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
                            <h3 class="mb-0">$35.2K</h3>
                        </div>
                        <div class="col-5">
                            <div class="mt-n2" data-render="apexchart" data-type="line" data-title="Visitors" data-height="30"></div>
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
                            <h3 class="mb-0">4,490</h3>
                        </div>
                        <div class="col-5">
                            <div class="mt-n3 mb-n2" data-render="apexchart" data-type="pie" data-title="Visitors" data-height="45"></div>
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
                            <h3 class="mb-0">4.5TB</h3>
                        </div>
                        <div class="col-5">
                            <div class="mt-n3 mb-n2" data-render="apexchart" data-type="donut" data-title="Visitors" data-height="45"></div>
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
                                <tr>
                                    <td>
                                        <div class="d-flex">
                                            <div class="position-relative mb-2">
                                                <div class="bg-position-center bg-size-cover bg-repeat-no-repeat w-80px h-60px" style="background-image: url(assets/img/dashboard/product-1.jpeg);">
                                                </div>
                                                <div class="position-absolute top-0 start-0">
                                                    <span class="badge bg-theme text-theme-900 rounded-0 d-flex align-items-center justify-content-center w-20px h-20px">1</span>
                                                </div>
                                            </div>
                                            <div class="flex-1 ps-3">
                                                <div class="mb-1"><small class="fs-9px fw-500 lh-1 d-inline-block rounded-0 badge bg-secondary bg-opacity-25 text-inverse text-opacity-75 pt-5px">SKU90400</small></div>
                                                <div class="fw-500 text-inverse">Huawei Smart Watch</div>
                                                $399.00
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <table class="mb-2">
                                            <tr>
                                                <td class="pe-3">QTY:</td>
                                                <td class="text-inverse text-opacity-75 fw-500">129</td>
                                            </tr>
                                            <tr>
                                                <td class="pe-3">REVENUE:</td>
                                                <td class="text-inverse text-opacity-75 fw-500">$51,471</td>
                                            </tr>
                                            <tr>
                                                <td class="pe-3 text-nowrap">PROFIT:</td>
                                                <td class="text-inverse text-opacity-75 fw-500">$15,441</td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td><a href="#" class="text-decoration-none text-inverse"><i class="bi bi-search"></i></a></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex mb-2 align-items-center">
                                            <div class="position-relative">
                                                <div class="bg-position-center bg-size-cover bg-repeat-no-repeat w-80px h-60px" style="background-image: url(assets/img/dashboard/product-2.jpeg);">
                                                </div>
                                                <div class="position-absolute top-0 start-0">
                                                    <span class="badge bg-theme text-theme-900 rounded-0 d-flex align-items-center justify-content-center w-20px h-20px">2</span>
                                                </div>
                                            </div>
                                            <div class="flex-1 ps-3">
                                                <div class="mb-1"><small class="fs-9px fw-500 lh-1 d-inline-block rounded-0 badge bg-secondary bg-opacity-25 text-inverse text-opacity-75 pt-5px">SKU85999</small></div>
                                                <div class="text-inverse fw-500">Nike Shoes Black Version</div>
                                                $99.00
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <table class="mb-2">
                                            <tr>
                                                <td class="pe-3">QTY:</td>
                                                <td class="text-inverse text-opacity-75 fw-500">108</td>
                                            </tr>
                                            <tr>
                                                <td class="pe-3">REVENUE:</td>
                                                <td class="text-inverse text-opacity-75 fw-500">$10,692</td>
                                            </tr>
                                            <tr>
                                                <td class="pe-3 text-nowrap">PROFIT:</td>
                                                <td class="text-inverse text-opacity-75 fw-500">$5,346</td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td><a href="#" class="text-decoration-none text-inverse"><i class="bi bi-search"></i></a></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex mb-2 align-items-center">
                                            <div class="position-relative">
                                                <div class="bg-position-center bg-size-cover bg-repeat-no-repeat w-80px h-60px" style="background-image: url(assets/img/dashboard/product-3.jpeg);">
                                                </div>
                                                <div class="position-absolute top-0 start-0">
                                                    <span class="badge bg-theme text-theme-900 rounded-0 d-flex align-items-center justify-content-center w-20px h-20px">3</span>
                                                </div>
                                            </div>
                                            <div class="flex-1 ps-3">
                                                <div class="mb-1"><small class="fs-9px fw-500 lh-1 d-inline-block rounded-0 badge bg-secondary bg-opacity-25 text-inverse text-opacity-75 pt-5px">SKU20400</small></div>
                                                <div class="text-inverse fw-500">White Sony PS4</div>
                                                $599
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <table class="mb-2">
                                            <tr>
                                                <td class="pe-3">QTY:</td>
                                                <td class="text-inverse text-opacity-75 fw-500">72</td>
                                            </tr>
                                            <tr>
                                                <td class="pe-3">REVENUE:</td>
                                                <td class="text-inverse text-opacity-75 fw-500">$43,128</td>
                                            </tr>
                                            <tr>
                                                <td class="pe-3 text-nowrap">PROFIT:</td>
                                                <td class="text-inverse text-opacity-75 fw-500">$4,312</td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td><a href="#" class="text-decoration-none text-inverse"><i class="bi bi-search"></i></a></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex mb-2 align-items-center">
                                            <div class="position-relative">
                                                <div class="bg-position-center bg-size-cover bg-repeat-no-repeat w-80px h-60px" style="background-image: url(assets/img/dashboard/product-4.jpeg);">
                                                </div>
                                                <div class="position-absolute top-0 start-0">
                                                    <span class="badge bg-black bg-opacity-50 rounded-0 d-flex align-items-center justify-content-center w-20px h-20px">4</span>
                                                </div>
                                            </div>
                                            <div class="flex-1 ps-3">
                                                <div class="mb-1"><small class="fs-9px fw-500 lh-1 d-inline-block rounded-0 badge bg-secondary bg-opacity-25 text-inverse text-opacity-75 pt-5px">SKU19299</small></div>
                                                <div class="text-inverse fw-500">Apple Watch Series 5</div>
                                                $1,099
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <table class="mb-2">
                                            <tr>
                                                <td class="pe-3">QTY:</td>
                                                <td class="text-inverse text-opacity-75 fw-500">53</td>
                                            </tr>
                                            <tr>
                                                <td class="pe-3">REVENUE:</td>
                                                <td class="text-inverse text-opacity-75 fw-500">$58,247</td>
                                            </tr>
                                            <tr>
                                                <td class="pe-3 text-nowrap">PROFIT:</td>
                                                <td class="text-inverse text-opacity-75 fw-500">$2,912</td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td><a href="#" class="text-decoration-none text-inverse"><i class="bi bi-search"></i></a></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="position-relative">
                                                <div class="bg-position-center bg-size-cover bg-repeat-no-repeat w-80px h-60px" style="background-image: url(assets/img/dashboard/product-5.jpeg);">
                                                </div>
                                                <div class="position-absolute top-0 start-0">
                                                    <span class="badge bg-black bg-opacity-50 rounded-0 d-flex align-items-center justify-content-center w-20px h-20px">5</span>
                                                </div>
                                            </div>
                                            <div class="flex-1 ps-3">
                                                <div class="mb-1"><small class="fs-9px fw-500 lh-1 d-inline-block rounded-0 badge bg-secondary bg-opacity-25 text-inverse text-opacity-75 pt-5px">SKU19299</small></div>
                                                <div class="text-inverse fw-500">Black Nikon DSLR</div>
                                                1,899
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <table>
                                            <tr>
                                                <td class="pe-3">QTY:</td>
                                                <td class="text-inverse text-opacity-75 fw-500">50</td>
                                            </tr>
                                            <tr>
                                                <td class="pe-3">REVENUE:</td>
                                                <td class="text-inverse text-opacity-75 fw-500">$90,950</td>
                                            </tr>
                                            <tr>
                                                <td class="pe-3 text-nowrap">PROFIT:</td>
                                                <td class="text-inverse text-opacity-75 fw-500">$2,848</td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td><a href="#" class="text-decoration-none text-inverse"><i class="bi bi-search"></i></a></td>
                                </tr>
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
                                <tr>
                                    <td>
                                        <span class="d-flex align-items-center">
                                            <i class="bi bi-circle-fill fs-6px text-theme me-2"></i>
                                            You have sold an item - $1,299
                                        </span>
                                    </td>
                                    <td><small>just now</small></td>
                                    <td>
                                        <span class="badge d-block bg-theme text-theme-900 rounded-0 pt-5px w-70px" style="min-height: 18px">PRODUCT</span>
                                    </td>
                                    <td><a href="#" class="text-decoration-none text-inverse"><i class="bi bi-search"></i></a></td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="d-flex align-items-center">
                                            <i class="bi bi-circle-fill fs-6px text-inverse-transparent-3 me-2"></i>
                                            Firewall upgrade
                                        </span>
                                    </td>
                                    <td><small>1 min ago</small></td>
                                    <td>
                                        <span class="badge d-block text-inverse bg-secondary bg-opacity-25 rounded-0 pt-5px w-70px" style="min-height: 18px">SERVER</span>
                                    </td>
                                    <td><a href="#" class="text-decoration-none text-inverse"><i class="bi bi-search"></i></a></td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="d-flex align-items-center">
                                            <i class="bi bi-circle-fill fs-6px text-inverse-transparent-3 me-2"></i>
                                            Push notification v2.0 installation
                                        </span>
                                    </td>
                                    <td><small>1 mins ago</small></td>
                                    <td>
                                        <span class="badge d-block text-inverse bg-secondary bg-opacity-25 rounded-0 pt-5px w-70px" style="min-height: 18px">ANDROID</span>
                                    </td>
                                    <td><a href="#" class="text-decoration-none text-inverse"><i class="bi bi-search"></i></a></td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="d-flex align-items-center">
                                            <i class="bi bi-circle-fill fs-6px text-theme me-2"></i>
                                            New Subscription - 1yr Plan
                                        </span>
                                    </td>
                                    <td><small>1 min ago</small></td>
                                    <td>
                                        <span class="badge d-block bg-theme text-theme-900 rounded-0 pt-5px w-70px" style="min-height: 18px">SALES</span>
                                    </td>
                                    <td><a href="#" class="text-decoration-none text-inverse"><i class="bi bi-search"></i></a></td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="d-flex align-items-center">
                                            <i class="bi bi-circle-fill fs-6px text-inverse text-opacity-25 me-2"></i>
                                            2 Unread enquiry
                                        </span>
                                    </td>
                                    <td><small>2 mins ago</small></td>
                                    <td>
                                        <span class="badge d-block text-inverse bg-secondary bg-opacity-25 rounded-0 pt-5px w-70px" style="min-height: 18px">ENQUIRY</span>
                                    </td>
                                    <td><a href="#" class="text-decoration-none text-inverse"><i class="bi bi-search"></i></a></td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="d-flex align-items-center">
                                            <i class="bi bi-circle-fill fs-6px text-theme me-2"></i>
                                            $30,402 received from Paypal
                                        </span>
                                    </td>
                                    <td><small>2 mins ago</small></td>
                                    <td>
                                        <span class="badge d-block bg-theme text-theme-900 rounded-0 pt-5px w-70px" style="min-height: 18px">PAYMENT</span>
                                    </td>
                                    <td><a href="#" class="text-decoration-none text-inverse"><i class="bi bi-search"></i></a></td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="d-flex align-items-center">
                                            <i class="bi bi-circle-fill fs-6px text-theme me-2"></i>
                                            3 payment received
                                        </span>
                                    </td>
                                    <td><small>5 mins ago</small></td>
                                    <td>
                                        <span class="badge d-block bg-theme text-theme-900 rounded-0 pt-5px w-70px" style="min-height: 18px">PAYMENT</span>
                                    </td>
                                    <td><a href="#" class="text-decoration-none text-inverse"><i class="bi bi-search"></i></a></td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="d-flex align-items-center">
                                            <i class="bi bi-circle-fill fs-6px text-inverse text-opacity-25 me-2"></i>
                                            1 pull request from github
                                        </span>
                                    </td>
                                    <td><small>5 mins ago</small></td>
                                    <td>
                                        <span class="badge d-block text-inverse bg-secondary bg-opacity-25 rounded-0 pt-5px w-70px" style="min-height: 18px">GITHUB</span>
                                    </td>
                                    <td><a href="#" class="text-decoration-none text-inverse"><i class="bi bi-search"></i></a></td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="d-flex align-items-center">
                                            <i class="bi bi-circle-fill fs-6px text-inverse-transparent-3 me-2"></i>
                                            3 pending invoice to generate
                                        </span>
                                    </td>
                                    <td><small>5 mins ago</small></td>
                                    <td>
                                        <span class="badge d-block text-inverse bg-secondary bg-opacity-25 rounded-0 pt-5px w-70px" style="min-height: 18px">INVOICE</span>
                                    </td>
                                    <td><a href="#" class="text-decoration-none text-inverse"><i class="bi bi-search"></i></a></td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="d-flex align-items-center">
                                            <i class="bi bi-circle-fill fs-6px text-inverse text-opacity-25 me-2"></i>
                                            2 new message from fb messenger
                                        </span>
                                    </td>
                                    <td><small>7 mins ago</small></td>
                                    <td>
                                        <span class="badge d-block text-inverse bg-secondary bg-opacity-25 rounded-0 pt-5px w-70px" style="min-height: 18px">INBOX</span>
                                    </td>
                                    <td><a href="#" class="text-decoration-none text-inverse"><i class="bi bi-search"></i></a></td>
                                </tr>
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
@push('dashboard')
<script src="{{ asset('assets/plugins/apexcharts/dist/apexcharts.min.js') }}"></script>
<script src="{{ asset('assets/js/demo/dashboard.demo.js') }}"></script>
@endpush
