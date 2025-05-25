@extends('partials.dashboard')
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- BEGIN #app -->
<div id="app" class="app app-content-full-height app-without-sidebar app-without-header">
    <!-- BEGIN #content -->
    <div id="content" class="app-content p-1 ps-xl-4 pe-xl-4 pt-xl-3 pb-xl-3">
        <!-- BEGIN pos -->
        <div class="pos card" id="pos">
            <div class="pos-container card-body">
                <!-- BEGIN pos-menu -->
                <div class="pos-menu">
                    <!-- BEGIN logo -->
                    <div class="logo">
                        <a href="index.html">
                            <div class="logo-img"><i class="bi bi-x-diamond" style="font-size: 2.1rem;"></i></div>
                            <div class="logo-text">Laris POS</div>
                        </a>
                    </div>
                    <!-- END logo -->
                    <!-- BEGIN nav-container -->
                    <div class="nav-container">
                        <div data-scrollbar="true" data-height="100%" data-skip-mobile="true">
                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#" data-filter="all">
                                        <div class="card">
                                            <div class="card-body">
                                                <i class="fa fa-fw fa-utensils"></i> All Dishes
                                            </div>
                                            <div class="card-arrow">
                                                <div class="card-arrow-top-left"></div>
                                                <div class="card-arrow-top-right"></div>
                                                <div class="card-arrow-bottom-left"></div>
                                                <div class="card-arrow-bottom-right"></div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#" data-filter="meat">
                                        <div class="card">
                                            <div class="card-body">
                                                <i class="fa fa-fw fa-drumstick-bite"></i> Meat
                                            </div>
                                            <div class="card-arrow">
                                                <div class="card-arrow-top-left"></div>
                                                <div class="card-arrow-top-right"></div>
                                                <div class="card-arrow-bottom-left"></div>
                                                <div class="card-arrow-bottom-right"></div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#" data-filter="burger">
                                        <div class="card">
                                            <div class="card-body">
                                                <i class="fa fa-fw fa-hamburger"></i> Burger
                                            </div>
                                            <div class="card-arrow">
                                                <div class="card-arrow-top-left"></div>
                                                <div class="card-arrow-top-right"></div>
                                                <div class="card-arrow-bottom-left"></div>
                                                <div class="card-arrow-bottom-right"></div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#" data-filter="pizza">
                                        <div class="card">
                                            <div class="card-body">
                                                <i class="fa fa-fw fa-pizza-slice"></i> Pizza
                                            </div>
                                            <div class="card-arrow">
                                                <div class="card-arrow-top-left"></div>
                                                <div class="card-arrow-top-right"></div>
                                                <div class="card-arrow-bottom-left"></div>
                                                <div class="card-arrow-bottom-right"></div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#" data-filter="drinks">
                                        <div class="card">
                                            <div class="card-body">
                                                <i class="fa fa-fw fa-cocktail"></i> Drinks
                                            </div>
                                            <div class="card-arrow">
                                                <div class="card-arrow-top-left"></div>
                                                <div class="card-arrow-top-right"></div>
                                                <div class="card-arrow-bottom-left"></div>
                                                <div class="card-arrow-bottom-right"></div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#" data-filter="desserts">
                                        <div class="card">
                                            <div class="card-body">
                                                <i class="fa fa-fw fa-ice-cream"></i> Desserts
                                            </div>
                                            <div class="card-arrow">
                                                <div class="card-arrow-top-left"></div>
                                                <div class="card-arrow-top-right"></div>
                                                <div class="card-arrow-bottom-left"></div>
                                                <div class="card-arrow-bottom-right"></div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#" data-filter="snacks">
                                        <div class="card">
                                            <div class="card-body">
                                                <i class="fa fa-fw fa-cookie-bite"></i> Snacks
                                            </div>
                                            <div class="card-arrow">
                                                <div class="card-arrow-top-left"></div>
                                                <div class="card-arrow-top-right"></div>
                                                <div class="card-arrow-bottom-left"></div>
                                                <div class="card-arrow-bottom-right"></div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- END nav-container -->
                </div>
                <!-- END pos-menu -->

                <!-- BEGIN pos-content -->
                <div class="pos-content">
                    <div class="pos-content-container h-100 p-4" data-scrollbar="true" data-height="100%">
                        <div class="row gx-4">
                            @foreach ($inventories as $item)
                            <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-4 col-sm-6 pb-4" data-type="{{ $item->tags }}">
                                <!-- BEGIN card -->
                                <div class="card h-100">
                                    <div class="card-body h-100 p-1">
                                        <a href="#" class="pos-product"
                                            data-id="{{ $item->id }}"
                                            data-name="{{ $item->name }}"
                                            data-price="{{ $item->price }}"
                                            data-description="{{ $item->description }}"
                                            data-image="{{ asset($item->images) }}"
                                            onclick="showProductModal(this)"
                                            data-bs-toggle="modal"
                                            data-bs-target="#modalPosItem">
                                            <div class="img" style="background-image: url('{{ asset($item->images) }}')"></div>
                                            <div class="info">
                                                <div class="title">{{ $item->name }}&reg;</div>
                                                <div class="desc">{{ $item->description }}</div>
                                                <div class="price">Rp{{ number_format($item->price, 2) }}</div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="card-arrow">
                                        <div class="card-arrow-top-left"></div>
                                        <div class="card-arrow-top-right"></div>
                                        <div class="card-arrow-bottom-left"></div>
                                        <div class="card-arrow-bottom-right"></div>
                                    </div>
                                </div>
                                <!-- END card -->
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <!-- END pos-content -->

                <!-- BEGIN pos-sidebar -->
                <div class="pos-sidebar" id="pos-sidebar">
                    <div class="h-100 d-flex flex-column p-0">
                        <!-- BEGIN pos-sidebar-header -->
                        <div class="pos-sidebar-header">
                            <div class="back-btn">
                                <button type="button" data-toggle-class="pos-mobile-sidebar-toggled" data-toggle-target="#pos" class="btn">
                                    <i class="bi bi-chevron-left"></i>
                                </button>
                            </div>
                            <div class="icon"><img src="assets/img/pos/icon-table-black.svg" class="invert-dark" alt=""></div>
                            <div class="title">Table 01</div>
                            <div class="order">Order: <b>#0056</b></div>
                        </div>
                        <!-- END pos-sidebar-header -->

                        <!-- BEGIN pos-sidebar-nav -->
                        <div class="pos-sidebar-nav">
                            <ul class="nav nav-tabs nav-fill">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#" data-bs-toggle="tab" data-bs-target="#newOrderTab">Item Order (5)</a>
                                </li>
                                <!-- <li class="nav-item">
                                    <a class="nav-link" href="#" data-bs-toggle="tab" data-bs-target="#orderHistoryTab">Order History (0)</a>
                                </li> -->
                            </ul>
                        </div>
                        <!-- END pos-sidebar-nav -->

                        <!-- BEGIN pos-sidebar-body -->
                        <div class="pos-sidebar-body tab-content" data-scrollbar="true" data-height="100%">
                            <!-- BEGIN #newOrderTab -->
                            <div class="tab-pane fade h-100 show active" id="newOrderTab">
                                <!-- BEGIN pos-order -->
                                <div class="pos-order">
                                    <div class="pos-order-product">
                                        <div class="img" style="background-image: url(assets/img/pos/product-2.jpg)"></div>
                                        <div class="flex-1">
                                            <div class="h6 mb-1">Grill Pork Chop</div>
                                            <div class="small">$12.99</div>
                                            <div class="small mb-2">- size: large</div>
                                            <div class="d-flex">
                                                <a href="#" class="btn btn-outline-theme btn-sm"><i class="fa fa-minus"></i></a>
                                                <input type="text" class="form-control w-50px form-control-sm mx-2 bg-white bg-opacity-25 text-center" value="01">
                                                <a href="#" class="btn btn-outline-theme btn-sm"><i class="fa fa-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pos-order-price">
                                        $12.99
                                    </div>
                                </div>
                                <!-- END pos-order -->
                                <!-- BEGIN pos-order -->
                                <!-- <div class="pos-order">
                                    <div class="pos-order-product">
                                        <div class="img" style="background-image: url(assets/img/pos/product-8.jpg)"></div>
                                        <div class="flex-1">
                                            <div class="h6 mb-1">Orange Juice</div>
                                            <div class="small">$5.00</div>
                                            <div class="small mb-2">
                                                - size: large<br>
                                                - less ice
                                            </div>
                                            <div class="d-flex">
                                                <a href="#" class="btn btn-outline-theme btn-sm"><i class="fa fa-minus"></i></a>
                                                <input type="text" class="form-control w-50px form-control-sm mx-2 bg-white bg-opacity-25 text-center" value="02">
                                                <a href="#" class="btn btn-outline-theme btn-sm"><i class="fa fa-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pos-order-price">
                                        $10.00
                                    </div>
                                    <div class="pos-order-confirmation text-center d-flex flex-column justify-content-center">
                                        <div class="mb-1">
                                            <i class="bi bi-trash fs-36px lh-1"></i>
                                        </div>
                                        <div class="mb-2">Remove this item?</div>
                                        <div>
                                            <a href="#" class="btn btn-outline-default btn-sm ms-auto me-2 width-100px">No</a>
                                            <a href="#" class="btn btn-outline-theme btn-sm width-100px">Yes</a>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- END pos-order -->
                                <!-- BEGIN pos-order -->
                                <div class="pos-order">
                                    <div class="pos-order-product">
                                        <div class="img" style="background-image: url(assets/img/pos/product-1.jpg)"></div>
                                        <div class="flex-1">
                                            <div class="h6 mb-1">Grill chicken chop</div>
                                            <div class="small">$10.99</div>
                                            <div class="small mb-2">
                                                - size: large<br>
                                                - spicy: medium
                                            </div>
                                            <div class="d-flex">
                                                <a href="#" class="btn btn-outline-theme btn-sm"><i class="fa fa-minus"></i></a>
                                                <input type="text" class="form-control w-50px form-control-sm mx-2 bg-white bg-opacity-25 text-center" value="01">
                                                <a href="#" class="btn btn-outline-theme btn-sm"><i class="fa fa-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pos-order-price">
                                        $10.99
                                    </div>
                                </div>
                                <!-- END pos-order -->
                                <!-- BEGIN pos-order -->
                                <div class="pos-order">
                                    <div class="pos-order-product">
                                        <div class="img" style="background-image: url(assets/img/pos/product-5.jpg)"></div>
                                        <div class="flex-1">
                                            <div class="h6 mb-1">Hawaiian Pizza</div>
                                            <div class="small">$15.00</div>
                                            <div class="small mb-2">
                                                - size: large<br>
                                                - more onion
                                            </div>
                                            <div class="d-flex">
                                                <a href="#" class="btn btn-outline-theme btn-sm"><i class="fa fa-minus"></i></a>
                                                <input type="text" class="form-control w-50px form-control-sm mx-2 bg-white bg-opacity-25 text-center" value="01">
                                                <a href="#" class="btn btn-outline-theme btn-sm"><i class="fa fa-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pos-order-price">
                                        $15.00
                                    </div>
                                </div>
                                <!-- END pos-order -->
                                <!-- BEGIN pos-order -->
                                <div class="pos-order">
                                    <div class="pos-order-product">
                                        <div class="img" style="background-image: url(assets/img/pos/product-10.jpg)"></div>
                                        <div class="flex-1">
                                            <div class="h6 mb-1">Mushroom Soup</div>
                                            <div class="small">$3.99</div>
                                            <div class="small mb-2">
                                                - size: large<br>
                                                - more cheese
                                            </div>
                                            <div class="d-flex">
                                                <a href="#" class="btn btn-outline-theme btn-sm"><i class="fa fa-minus"></i></a>
                                                <input type="text" class="form-control w-50px form-control-sm mx-2 bg-white bg-opacity-25 text-center" value="01">
                                                <a href="#" class="btn btn-outline-theme btn-sm"><i class="fa fa-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pos-order-price">
                                        $3.99
                                    </div>
                                </div>
                                <!-- END pos-order -->
                            </div>
                            <!-- END #orderHistoryTab -->

                            <!-- BEGIN #orderHistoryTab -->
                            <div class="tab-pane fade h-100" id="orderHistoryTab">
                                <div class="h-100 d-flex align-items-center justify-content-center text-center p-20">
                                    <div>
                                        <div class="mb-3 mt-n5">
                                            <svg width="6em" height="6em" viewBox="0 0 16 16" class="text-gray-300" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M14 5H2v9a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V5zM1 4v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4H1z" />
                                                <path d="M8 1.5A2.5 2.5 0 0 0 5.5 4h-1a3.5 3.5 0 1 1 7 0h-1A2.5 2.5 0 0 0 8 1.5z" />
                                            </svg>
                                        </div>
                                        <h5>No order history found</h5>
                                    </div>
                                </div>
                            </div>
                            <!-- END #orderHistoryTab -->
                        </div>
                        <!-- END pos-sidebar-body -->

                        <!-- BEGIN pos-sidebar-footer -->
                        <div class="pos-sidebar-footer">
                            <div class="d-flex align-items-center mb-2">
                                <div>Subtotal</div>
                                <div class="flex-1 text-end h6 mb-0">$30.98</div>
                            </div>
                            <div class="d-flex align-items-center">
                                <div>Taxes (6%)</div>
                                <div class="flex-1 text-end h6 mb-0">$2.12</div>
                            </div>
                            <hr>
                            <div class="d-flex align-items-center mb-2">
                                <div>Total</div>
                                <div class="flex-1 text-end h4 mb-0">$33.10</div>
                            </div>
                            <div class="mt-3">
                                <div class="btn-group d-flex">
                                    <a href="#" class="btn btn-outline-default rounded-0 w-80px">
                                        <i class="bi bi-bell fa-lg"></i><br>
                                        <span class="small">Service</span>
                                    </a>
                                    <a href="#" class="btn btn-outline-default rounded-0 w-80px">
                                        <i class="bi bi-receipt fa-fw fa-lg"></i><br>
                                        <span class="small">Bill</span>
                                    </a>
                                    <a href="#" id="submitOrderBtn" class="btn btn-outline-theme rounded-0 w-150px">
                                        <i class="bi bi-send-check fa-lg"></i><br>
                                        <span class="small">Submit Order</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- END pos-sidebar-footer -->
                    </div>
                </div>
                <!-- END pos-sidebar -->
            </div>
            <div class="card-arrow">
                <div class="card-arrow-top-left"></div>
                <div class="card-arrow-top-right"></div>
                <div class="card-arrow-bottom-left"></div>
                <div class="card-arrow-bottom-right"></div>
            </div>
        </div>
        <!-- END pos -->

        <!-- BEGIN pos-mobile-sidebar-toggler -->
        <a href="#" class="pos-mobile-sidebar-toggler" data-toggle-class="pos-mobile-sidebar-toggled" data-toggle-target="#pos">
            <i class="bi bi-bag"></i>
            <span class="badge">5</span>
        </a>
        <!-- END pos-mobile-sidebar-toggler -->
    </div>
    <!-- END #content -->
    <!-- BEGIN btn-scroll-top -->
    <a href="#" data-toggle="scroll-to-top" class="btn-scroll-top fade"><i class="fa fa-arrow-up"></i></a>
    <!-- END btn-scroll-top -->
</div>
<!-- END #app -->

<!-- BEGIN #modalPosItem -->
<div class="modal modal-pos fade" id="modalPosItem">
    <div class="modal-dialog modal-lg">
        <div class="modal-content border-0">
            <div class="card">
                <div class="card-body p-0">
                    <a href="#" data-bs-dismiss="modal" class="btn-close position-absolute top-0 end-0 m-4"></a>
                    <div class="modal-pos-product">
                        <div class="modal-pos-product-img">
                            <div class="img" id="modalProductImage" style="background-image: url(assets/img/pos/product-1.jpg)"></div>
                        </div>
                        <div class="modal-pos-product-info">
                            <div class="h4 mb-2" id="modalProductName">Grill Chicken Chop</div>
                            <div class="text-inverse text-opacity-50 mb-2" id="modalProductDescription">
                                chicken, egg, mushroom, salad
                            </div>
                            <div class="h4 mb-3" id="modalProductPrice">$10.99</div>
                            <div class="d-flex mb-3">
                                <a href="#" class="btn btn-outline-theme" id="modalDecreaseQty"><i class="fa fa-minus"></i></a>
                                <input type="text" class="form-control w-50px fw-bold mx-2 bg-inverse bg-opacity-15 border-0 text-center" id="modalProductQty" name="qty" value="1">
                                <a href="#" class="btn btn-outline-theme" id="modalIncreaseQty"><i class="fa fa-plus"></i></a>
                            </div>
                            <hr class="mx-n4">
                            <div class="mb-2">
                                <div class="fw-bold">Size:</div>
                                <div class="option-list">
                                    <div class="option">
                                        <input type="radio" id="size3" name="size" class="option-input" value="Small" data-price="0" checked>
                                        <label class="option-label" for="size3">
                                            <span class="option-text">Small</span>
                                            <span class="option-price">+0.00</span>
                                        </label>
                                    </div>
                                    <div class="option">
                                        <input type="radio" id="size1" name="size" class="option-input" value="Large" data-price="3">
                                        <label class="option-label" for="size1">
                                            <span class="option-text">Large</span>
                                            <span class="option-price">+3.00</span>
                                        </label>
                                    </div>
                                    <div class="option">
                                        <input type="radio" id="size2" name="size" class="option-input" value="Medium" data-price="1.5">
                                        <label class="option-label" for="size2">
                                            <span class="option-text">Medium</span>
                                            <span class="option-price">+1.50</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-2">
                                <div class="fw-bold">Add On:</div>
                                <div class="option-list">
                                    <div class="option">
                                        <input type="checkbox" name="addon[sos]" value="More BBQ sos" class="option-input addon-checkbox" id="addon1" data-price="0">
                                        <label class="option-label" for="addon1">
                                            <span class="option-text">More BBQ sos</span>
                                            <span class="option-price">+0.00</span>
                                        </label>
                                    </div>
                                    <div class="option">
                                        <input type="checkbox" name="addon[ff]" value="Extra french fries" class="option-input addon-checkbox" id="addon2" data-price="1">
                                        <label class="option-label" for="addon2">
                                            <span class="option-text">Extra french fries</span>
                                            <span class="option-price">+1.00</span>
                                        </label>
                                    </div>
                                    <div class="option">
                                        <input type="checkbox" name="addon[ms]" value="Mushroom soup" class="option-input addon-checkbox" id="addon3" data-price="3.5">
                                        <label class="option-label" for="addon3">
                                            <span class="option-text">Mushroom soup</span>
                                            <span class="option-price">+3.50</span>
                                        </label>
                                    </div>
                                    <div class="option">
                                        <input type="checkbox" name="addon[juice]" value="Lemon Juice (set)" class="option-input addon-checkbox" id="addon4" data-price="2.5">
                                        <label class="option-label" for="addon4">
                                            <span class="option-text">Lemon Juice (set)</span>
                                            <span class="option-price">+2.50</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <hr class="mx-n4">
                            <div class="row">
                                <div class="col-4">
                                    <a href="#" class="btn btn-default h4 mb-0 d-block rounded-0 py-3" data-bs-dismiss="modal">Cancel</a>
                                </div>
                                <div class="col-8">
                                    <a href="#" class="btn btn-theme d-flex justify-content-center align-items-center rounded-0 py-3 h4 m-0" id="btnAddToCart">Add to cart <i class="bi bi-plus fa-2x ms-2 my-n3"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-arrow">
                    <div class="card-arrow-top-left"></div>
                    <div class="card-arrow-top-right"></div>
                    <div class="card-arrow-bottom-left"></div>
                    <div class="card-arrow-bottom-right"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Your order container -->
<div class="pos-order-container">
    <!-- Order items will be added here dynamically -->
</div>
<!-- END #modalPosItem -->
@stop


@push('pos')
<script src="{{ asset('assets/js/demo/pos-customer-order.demo.js') }}"></script>
<script>
    // Store current product details
    let currentProduct = {
        id: null,
        name: '',
        price: 0,
        description: '',
        image: '',
        basePrice: 0
    };

    // Initialize order total calculation
    let orderSubtotal = 0;
    let taxRate = 0.06; // 6% tax rate

    // Show product modal with details
    function showProductModal(element) {
        // Store current product details for later use
        currentProduct.id = element.getAttribute('data-id');
        currentProduct.name = element.getAttribute('data-name');
        currentProduct.price = parseFloat(element.getAttribute('data-price'));
        currentProduct.basePrice = currentProduct.price; // Store original price
        currentProduct.description = element.getAttribute('data-description');
        currentProduct.image = element.getAttribute('data-image');

        // Format price for display (using Rupiah format)
        const formattedPrice = 'Rp' + new Intl.NumberFormat('id-ID').format(currentProduct.price);

        // Update modal with product details
        document.getElementById('modalProductName').textContent = currentProduct.name;
        document.getElementById('modalProductDescription').textContent = currentProduct.description;
        document.getElementById('modalProductPrice').textContent = formattedPrice;
        document.getElementById('modalProductImage').style.backgroundImage = `url('${currentProduct.image}')`;

        // Reset quantity to 1
        document.getElementById('modalProductQty').value = '1';

        // Reset all options
        document.querySelectorAll('input[name="size"]').forEach(radio => {
            if (radio.id === 'size3') { // Small size
                radio.checked = true;
            } else {
                radio.checked = false;
            }
        });

        document.querySelectorAll('.addon-checkbox').forEach(checkbox => {
            checkbox.checked = false;
        });

        // Update price display based on default options
        updateModalPrice();
    }

    // Set up event listeners once DOM is loaded
    document.addEventListener('DOMContentLoaded', function() {
        // Clear existing order items from template
        clearExistingOrderItems();

        // Update order count
        updateOrderCount();

        // Increase quantity button in modal
        document.getElementById('modalIncreaseQty').addEventListener('click', function(e) {
            e.preventDefault();
            const qtyInput = document.getElementById('modalProductQty');
            let qty = parseInt(qtyInput.value);
            qtyInput.value = qty + 1;
        });

        // Decrease quantity button in modal
        document.getElementById('modalDecreaseQty').addEventListener('click', function(e) {
            e.preventDefault();
            const qtyInput = document.getElementById('modalProductQty');
            let qty = parseInt(qtyInput.value);
            if (qty > 1) {
                qtyInput.value = qty - 1;
            }
        });

        // Handle size changes - update price
        document.querySelectorAll('input[name="size"]').forEach(radio => {
            radio.addEventListener('change', updateModalPrice);
        });

        // Handle addon changes - update price
        document.querySelectorAll('.addon-checkbox').forEach(checkbox => {
            checkbox.addEventListener('change', updateModalPrice);
        });

        // Add to cart button
        document.getElementById('btnAddToCart').addEventListener('click', function() {
            addCurrentItemToOrder();
            // Hide modal
            const modal = bootstrap.Modal.getInstance(document.getElementById('modalPosItem'));
            modal.hide();
        });

        // Initialize any existing remove buttons
        setupRemoveConfirmation();
    });

    // Clear the template order items initially
    function clearExistingOrderItems() {
        // Get all order items except those that are part of a confirmation view
        const orderItems = document.querySelectorAll('#newOrderTab .pos-order:not(:has(.pos-order-confirmation))');
        orderItems.forEach(item => item.remove());

        // Show empty state after clearing
        showEmptyOrderState();
    }

    // Show empty state when no orders exist
    function showEmptyOrderState() {
        const newOrderTab = document.getElementById('newOrderTab');
        const existingOrders = newOrderTab.querySelectorAll('.pos-order');
        const existingEmptyState = newOrderTab.querySelector('.empty-order-state');

        if (existingOrders.length === 0 && !existingEmptyState) {
            const emptyStateHTML = `
            <div class="empty-order-state h-100 d-flex align-items-center justify-content-center text-center p-20">
                <div>
                    <div class="mb-3 mt-n5">
                        <svg width="6em" height="6em" viewBox="0 0 16 16" class="text-gray-300" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M14 5H2v9a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V5zM1 4v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4H1z" />
                            <path d="M8 1.5A2.5 2.5 0 0 0 5.5 4h-1a3.5 3.5 0 1 1 7 0h-1A2.5 2.5 0 0 0 8 1.5z" />
                        </svg>
                    </div>
                    <h5>No order found</h5>
                    <p class="text-muted small">Add items to your cart to start an order</p>
                </div>
            </div>
        `;
            newOrderTab.insertAdjacentHTML('beforeend', emptyStateHTML);
        }
    }

    // Hide empty state when orders exist
    function hideEmptyOrderState() {
        const emptyState = document.querySelector('#newOrderTab .empty-order-state');
        if (emptyState) {
            emptyState.remove();
        }
    }

    // Update the price in the modal based on selected options
    function updateModalPrice() {
        // Get base price
        let totalPrice = currentProduct.basePrice;

        // Add size price
        const selectedSize = document.querySelector('input[name="size"]:checked');
        if (selectedSize) {
            totalPrice += parseFloat(selectedSize.getAttribute('data-price'));
        }

        // Add addon prices
        document.querySelectorAll('.addon-checkbox:checked').forEach(checkbox => {
            totalPrice += parseFloat(checkbox.getAttribute('data-price'));
        });

        // Update price display
        document.getElementById('modalProductPrice').textContent = 'Rp' + new Intl.NumberFormat('id-ID').format(totalPrice);
    }

    // Add current item from modal to order
    function addCurrentItemToOrder() {
        // Get current product details
        const id = currentProduct.id;
        const name = currentProduct.name;
        const image = currentProduct.image;
        const quantity = parseInt(document.getElementById('modalProductQty').value);

        // Calculate final price with options
        let totalPrice = currentProduct.basePrice;
        let options = [];

        // Add size option
        const selectedSize = document.querySelector('input[name="size"]:checked');
        if (selectedSize) {
            const sizePrice = parseFloat(selectedSize.getAttribute('data-price'));
            totalPrice += sizePrice;
            options.push(`- size: ${selectedSize.value}`);
        }

        // Add selected addons
        document.querySelectorAll('.addon-checkbox:checked').forEach(checkbox => {
            const addonPrice = parseFloat(checkbox.getAttribute('data-price'));
            totalPrice += addonPrice;
            options.push(`- ${checkbox.value}`);
        });

        // Calculate item total
        const itemTotal = totalPrice * quantity;

        // Format prices
        const formattedUnitPrice = 'Rp' + new Intl.NumberFormat('id-ID').format(totalPrice);
        const formattedTotal = 'Rp' + new Intl.NumberFormat('id-ID').format(itemTotal);

        // Generate unique ID for this item with options
        const optionsKey = options.join('|');
        const uniqueId = `item-${id}-${optionsKey.replace(/[^a-zA-Z0-9]/g, '')}`;

        // Check if exact same item (with same options) exists
        const existingItem = document.querySelector(`.pos-order[data-unique-id="${uniqueId}"]`);

        if (existingItem) {
            // Update existing item quantity
            const quantityInput = existingItem.querySelector('input[type="text"]');
            let existingQty = parseInt(quantityInput.value);
            let newQty = existingQty + quantity;
            quantityInput.value = newQty.toString().padStart(2, '0');

            // Update price
            const priceElement = existingItem.querySelector('.pos-order-price');
            priceElement.textContent = formattedTotal;

            // Update data attribute for calculations
            existingItem.setAttribute('data-quantity', newQty);
        } else {
            // Create options HTML
            const optionsHtml = options.length > 0 ? options.join('<br>') : '';

            // Create new order item
            const orderHTML = `
            <div class="pos-order" data-id="${id}" data-unique-id="${uniqueId}" data-price="${totalPrice}" data-quantity="${quantity}">
                <div class="pos-order-product">
                    <div class="img" style="background-image: url(${image})"></div>
                    <div class="flex-1">
                        <div class="h6 mb-1">${name}</div>
                        <div class="small">${formattedUnitPrice}</div>
                        <div class="small mb-2">
                            ${optionsHtml}
                        </div>
                        <div class="d-flex">
                            <a href="#" class="btn btn-outline-theme btn-sm btn-decrease" onclick="decreaseQuantity('${uniqueId}'); return false;"><i class="fa fa-minus"></i></a>
                            <input type="text" class="form-control w-50px form-control-sm mx-2 bg-white bg-opacity-25 text-center" value="${quantity.toString().padStart(2, '0')}" onchange="updatePrice('${uniqueId}', this.value)">
                            <a href="#" class="btn btn-outline-theme btn-sm btn-increase" onclick="increaseQuantity('${uniqueId}'); return false;"><i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="pos-order-price">
                    ${formattedTotal}
                </div>
                <a href="#" class="btn-remove" onclick="showRemoveConfirmation('${uniqueId}'); return false;">
                    <i class="bi bi-x-lg"></i>
                </a>
            </div>
        `;

            // Append to order container
            document.querySelector('#newOrderTab').insertAdjacentHTML('beforeend', orderHTML);

            // Hide empty state since we now have items
            hideEmptyOrderState();
        }

        // Update totals
        updateOrderTotal();
        updateOrderCount();
    }

    function increaseQuantity(uniqueId) {
        const orderItem = document.querySelector(`.pos-order[data-unique-id="${uniqueId}"]`);
        const quantityInput = orderItem.querySelector('input[type="text"]');
        let quantity = parseInt(quantityInput.value) + 1;
        quantityInput.value = quantity.toString().padStart(2, '0');
        orderItem.setAttribute('data-quantity', quantity);

        updateItemPrice(orderItem, quantity);
        updateOrderTotal();
    }

    function decreaseQuantity(uniqueId) {
        const orderItem = document.querySelector(`.pos-order[data-unique-id="${uniqueId}"]`);
        const quantityInput = orderItem.querySelector('input[type="text"]');
        let quantity = parseInt(quantityInput.value) - 1;

        if (quantity <= 0) {
            // Show confirmation instead of removing immediately
            showRemoveConfirmation(uniqueId);
        } else {
            quantityInput.value = quantity.toString().padStart(2, '0');
            orderItem.setAttribute('data-quantity', quantity);
            updateItemPrice(orderItem, quantity);
            updateOrderTotal();
        }
    }

    function updateItemPrice(orderItem, quantity) {
        const price = parseFloat(orderItem.getAttribute('data-price'));
        const total = price * quantity;

        const priceElement = orderItem.querySelector('.pos-order-price');
        priceElement.textContent = 'Rp' + new Intl.NumberFormat('id-ID').format(total);
    }

    function updatePrice(uniqueId, value) {
        const orderItem = document.querySelector(`.pos-order[data-unique-id="${uniqueId}"]`);
        const quantity = parseInt(value);

        if (quantity <= 0) {
            showRemoveConfirmation(uniqueId);
        } else {
            orderItem.setAttribute('data-quantity', quantity);
            updateItemPrice(orderItem, quantity);
            updateOrderTotal();
        }
    }

    function showRemoveConfirmation(uniqueId) {
        const orderItem = document.querySelector(`.pos-order[data-unique-id="${uniqueId}"]`);

        // Create confirmation overlay if not already present
        if (!orderItem.querySelector('.pos-order-confirmation')) {
            const confirmationHTML = `
            <div class="pos-order-confirmation text-center d-flex flex-column justify-content-center">
                <div class="mb-1">
                    <i class="bi bi-trash fs-36px lh-1"></i>
                </div>
                <div class="mb-2">Remove this item?</div>
                <div>
                    <a href="#" class="btn btn-outline-default btn-sm ms-auto me-2 width-100px btn-cancel-remove">No</a>
                    <a href="#" class="btn btn-outline-theme btn-sm width-100px btn-confirm-remove">Yes</a>
                </div>
            </div>
        `;

            orderItem.insertAdjacentHTML('beforeend', confirmationHTML);

            // Add event listeners for confirmation buttons
            orderItem.querySelector('.btn-cancel-remove').addEventListener('click', function(e) {
                e.preventDefault();
                orderItem.querySelector('.pos-order-confirmation').remove();
            });

            orderItem.querySelector('.btn-confirm-remove').addEventListener('click', function(e) {
                e.preventDefault();
                orderItem.remove();
                updateOrderTotal();
                updateOrderCount();

                // Check if we need to show empty state
                checkAndShowEmptyState();
            });
        }
    }

    function setupRemoveConfirmation() {
        // Find any existing remove confirmations and set up their buttons
        document.querySelectorAll('.pos-order .pos-order-confirmation').forEach(confirmation => {
            const orderItem = confirmation.closest('.pos-order');

            // No button
            confirmation.querySelector('.btn-outline-default').addEventListener('click', function(e) {
                e.preventDefault();
                confirmation.remove();
            });

            // Yes button
            confirmation.querySelector('.btn-outline-theme').addEventListener('click', function(e) {
                e.preventDefault();
                orderItem.remove();
                updateOrderTotal();
                updateOrderCount();

                // Check if we need to show empty state
                checkAndShowEmptyState();
            });
        });
    }

    function updateOrderTotal() {
        // Calculate order subtotal
        let subtotal = 0;
        const orderItems = document.querySelectorAll('#newOrderTab .pos-order');

        orderItems.forEach(item => {
            const price = parseFloat(item.getAttribute('data-price'));
            const quantity = parseInt(item.getAttribute('data-quantity') || item.querySelector('input[type="text"]').value);
            subtotal += price * quantity;
        });

        // Calculate tax and total
        const tax = subtotal * taxRate;
        const total = subtotal + tax;

        // Update UI elements for totals
        const subtotalElement = document.querySelector('.pos-sidebar-footer .d-flex:nth-child(1) .text-end');
        const taxElement = document.querySelector('.pos-sidebar-footer .d-flex:nth-child(2) .text-end');
        const totalElement = document.querySelector('.pos-sidebar-footer .d-flex:nth-child(4) .text-end');

        if (subtotalElement && taxElement && totalElement) {
            subtotalElement.textContent = 'Rp' + new Intl.NumberFormat('id-ID').format(subtotal);
            taxElement.textContent = 'Rp' + new Intl.NumberFormat('id-ID').format(tax);
            totalElement.textContent = 'Rp' + new Intl.NumberFormat('id-ID').format(total);
        }
    }

    function updateOrderCount() {
        // Count number of items in order
        const orderItems = document.querySelectorAll('#newOrderTab .pos-order');
        const count = orderItems.length;

        // Update count in tab
        const tabElement = document.querySelector('a[data-bs-target="#newOrderTab"]');
        if (tabElement) {
            tabElement.textContent = `Item Order (${count})`;
        }

        // Update count in mobile toggler
        const togglerElement = document.querySelector('.pos-mobile-sidebar-toggler .badge');
        if (togglerElement) {
            togglerElement.textContent = count;
        }
    }

    // Handle Submit Order button click
    document.addEventListener('DOMContentLoaded', function() {
        // Find the Submit Order button and add event listener
        const submitOrderBtn = document.querySelector('a[href="#"]:has(.bi-send-check)');
        if (submitOrderBtn) {
            submitOrderBtn.addEventListener('click', function(e) {
                e.preventDefault();
                submitOrder();
            });
        }
    });

    function submitOrder() {
        // Get all order items
        const orderItems = document.querySelectorAll('#newOrderTab .pos-order');

        if (orderItems.length === 0) {
            alert('No items in order. Please add items before submitting.');
            return;
        }

        // Prepare order data
        const items = [];
        let subtotal = 0;

        orderItems.forEach(item => {
            const inventoryId = item.getAttribute('data-id');
            const quantity = parseInt(item.getAttribute('data-quantity') || item.querySelector('input[type="text"]').value);
            const unitPrice = parseFloat(item.getAttribute('data-price'));
            const totalPrice = unitPrice * quantity;

            // Get options from the item display
            const optionsElement = item.querySelector('.small.mb-2');
            const options = optionsElement ? optionsElement.innerHTML.replace(/<br>/g, ', ') : '';

            items.push({
                inventory_id: inventoryId,
                quantity: quantity,
                unit_price: unitPrice,
                total_price: totalPrice,
                options: options
            });

            subtotal += totalPrice;
        });

        // Calculate tax and total
        const taxRate = 0.06; // 6% tax rate
        const tax = subtotal * taxRate;
        const total = subtotal + tax;

        // Get table and order information
        const tableNumber = document.querySelector('.pos-sidebar-header .title')?.textContent || 'Table 01';
        const orderNumber = document.querySelector('.pos-sidebar-header .order b')?.textContent || '#0056';

        // Prepare the complete order data
        const orderData = {
            items: items,
            subtotal: subtotal,
            tax: tax,
            total: total,
            payment_method: 'cash', // Default to cash, you can add payment method selection
            table_number: tableNumber,
            order_number: orderNumber,
            _token: document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || ''
        };

        // Show loading state
        const originalText = submitOrderBtn.innerHTML;
        submitOrderBtn.innerHTML = '<i class="bi bi-hourglass-split fa-lg"></i><br><span class="small">Processing...</span>';
        submitOrderBtn.style.pointerEvents = 'none';

        // Submit the order
        fetch('/transactions', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': orderData._token
                },
                body: JSON.stringify(orderData)
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Success - show confirmation and clear order
                    alert(`Order submitted successfully!\nInvoice: ${data.invoice_number}`);
                    clearOrder();
                } else {
                    // Error handling
                    alert('Error submitting order: ' + (data.message || 'Unknown error'));
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Error submitting order. Please try again.');
            })
            .finally(() => {
                // Reset button state
                submitOrderBtn.innerHTML = originalText;
                submitOrderBtn.style.pointerEvents = 'auto';
            });
    }

    function clearOrder() {
        // Remove all order items
        clearExistingOrderItems();
        const orderItems = document.querySelectorAll('#newOrderTab .pos-order');
        orderItems.forEach(item => item.remove());

        // Update totals and counts
        updateOrderTotal();
        updateOrderCount();

        // Generate new order number
        const newOrderNumber = '#' + Math.floor(Math.random() * 9000 + 1000).toString().padStart(4, '0');
        const orderElement = document.querySelector('.pos-sidebar-header .order b');
        if (orderElement) {
            orderElement.textContent = newOrderNumber;
        }
    }

    // Optional: Add payment method selection
    function showPaymentMethodModal() {
        // You can create a modal to select payment method before submitting
        // For now, we'll use a simple prompt
        const paymentMethods = ['cash', 'card', 'digital_wallet'];
        const selectedMethod = prompt('Select payment method:\n1. Cash\n2. Card\n3. Digital Wallet\n\nEnter 1, 2, or 3:');

        switch (selectedMethod) {
            case '1':
                return 'cash';
            case '2':
                return 'card';
            case '3':
                return 'digital_wallet';
            default:
                return 'cash';
        }
    }

    // Enhanced submit order with payment method selection
    function submitOrderWithPaymentSelection() {
        const orderItems = document.querySelectorAll('#newOrderTab .pos-order');

        if (orderItems.length === 0) {
            alert('No items in order. Please add items before submitting.');
            return;
        }

        // Get payment method
        const paymentMethod = showPaymentMethodModal();

        // Continue with the rest of the submit order logic...
        // (Use the same logic as submitOrder() but with the selected payment method)
    }
</script>
@endpush
