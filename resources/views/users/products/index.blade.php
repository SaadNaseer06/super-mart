@extends('layouts.user.app')
<!-- END SLIDER -->
{{-- @section('slider')
    <div class="page-slider margin-bottom-35">
        <div id="carousel-example-generic" class="carousel slide carousel-slider">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <!-- First slide -->
                <div class="item carousel-item-four active">
                    <div class="container">
                        <div class="carousel-position-four text-center">
                            <h2 class="margin-bottom-20 animate-delay carousel-title-v3 border-bottom-title text-uppercase"
                                data-animation="animated fadeInDown">
                                Tones of <br /><span class="color-red-v2">Shop UI Features</span><br /> designed
                            </h2>
                            <p class="carousel-subtitle-v2" data-animation="animated fadeInUp">Lorem ipsum dolor sit
                                amet constectetuer diam <br />
                                adipiscing elit euismod ut laoreet dolore.</p>
                        </div>
                    </div>
                </div>

                <!-- Second slide -->
                <div class="item carousel-item-five">
                    <div class="container">
                        <div class="carousel-position-four text-center">
                            <h2 class="animate-delay carousel-title-v4" data-animation="animated fadeInDown">
                                Unlimted
                            </h2>
                            <p class="carousel-subtitle-v2" data-animation="animated fadeInDown">
                                Layout Options
                            </p>
                            <p class="carousel-subtitle-v3 margin-bottom-30" data-animation="animated fadeInUp">
                                Fully Responsive
                            </p>
                            <a class="carousel-btn" href="#" data-animation="animated fadeInUp">See More
                                Details</a>
                        </div>
                        <img class="carousel-position-five animate-delay hidden-sm hidden-xs"
                            src="/assets/pages/img/shop-slider/slide2/price.png" alt="Price"
                            data-animation="animated zoomIn">
                    </div>
                </div>

                <!-- Third slide -->
                <div class="item carousel-item-six">
                    <div class="container">
                        <div class="carousel-position-four text-center">
                            <span class="carousel-subtitle-v3 margin-bottom-15" data-animation="animated fadeInDown">
                                Full Admin &amp; Frontend
                            </span>
                            <p class="carousel-subtitle-v4" data-animation="animated fadeInDown">
                                eCommerce UI
                            </p>
                            <p class="carousel-subtitle-v3" data-animation="animated fadeInDown">
                                Is Ready For Your Project
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Fourth slide -->
                <div class="item carousel-item-seven">
                    <div class="center-block">
                        <div class="center-block-wrap">
                            <div class="center-block-body">
                                <h2 class="carousel-title-v1 margin-bottom-20" data-animation="animated fadeInDown">
                                    The most <br />
                                    wanted bijouterie
                                </h2>
                                <a class="carousel-btn" href="#" data-animation="animated fadeInUp">But It
                                    Now!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control carousel-control-shop" href="#carousel-example-generic" role="button"
                data-slide="prev">
                <i class="fa fa-angle-left" aria-hidden="true"></i>
            </a>
            <a class="right carousel-control carousel-control-shop" href="#carousel-example-generic" role="button"
                data-slide="next">
                <i class="fa fa-angle-right" aria-hidden="true"></i>
            </a>
        </div>
    </div>
@endsection --}}

@section('style')
    <style>
        .StripeElement {
            background-color: white;
            padding: 8px 12px;
            border-radius: 4px;
            border: 1px solid transparent;
            box-shadow: 0 1px 3px 0 #e6ebf1;
            -webkit-transition: box-shadow 150ms ease;
            transition: box-shadow 150ms ease;
        }

        .StripeElement--focus {
            box-shadow: 0 1px 3px 0 #cfd7df;
        }

        .StripeElement--invalid {
            border-color: #fa755a;
        }

        .StripeElement--webkit-autofill {
            background-color: #fefde5 !important;
        }
    </style>
@endsection

@section('content')
    <div class="container">
        <!-- BEGIN SALE PRODUCT & NEW ARRIVALS -->
        <div class="row margin-bottom-40">
            <!-- BEGIN SALE PRODUCT -->
            {{-- @section('newarrival')
                <div class="col-md-12 sale-product">
                    <h2>New Arrivals</h2>
                    <div class="owl-carousel owl-carousel5">
                        <div>
                            <div class="product-item">
                                <div class="pi-img-wrapper">
                                    <img src="/assets/pages/img/products/model1.jpg" class="img-responsive"
                                        alt="Berry Lace Dress">
                                    <div>
                                        <a href="/assets/pages/img/products/model1.jpg"
                                            class="btn btn-default fancybox-button">Zoom</a>
                                        <a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
                                    </div>
                                </div>
                                <h3><a href="shop-item.html">Berry Lace Dress</a></h3>
                                <div class="pi-price">$29.00</div>
                                <a href="javascript:;" class="btn btn-default add2cart">Add to cart</a>
                                <div class="sticker sticker-sale"></div>
                            </div>
                        </div>
                        <div>
                            <div class="product-item">
                                <div class="pi-img-wrapper">
                                    <img src="/assets/pages/img/products/model2.jpg" class="img-responsive"
                                        alt="Berry Lace Dress">
                                    <div>
                                        <a href="/assets/pages/img/products/model2.jpg"
                                            class="btn btn-default fancybox-button">Zoom</a>
                                        <a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
                                    </div>
                                </div>
                                <h3><a href="shop-item.html">Berry Lace Dress2</a></h3>
                                <div class="pi-price">$29.00</div>
                                <a href="javascript:;" class="btn btn-default add2cart">Add to cart</a>
                            </div>
                        </div>
                        <div>
                            <div class="product-item">
                                <div class="pi-img-wrapper">
                                    <img src="/assets/pages/img/products/model6.jpg" class="img-responsive"
                                        alt="Berry Lace Dress">
                                    <div>
                                        <a href="/assets/pages/img/products/model6.jpg"
                                            class="btn btn-default fancybox-button">Zoom</a>
                                        <a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
                                    </div>
                                </div>
                                <h3><a href="shop-item.html">Berry Lace Dress2</a></h3>
                                <div class="pi-price">$29.00</div>
                                <a href="javascript:;" class="btn btn-default add2cart">Add to cart</a>
                            </div>
                        </div>
                        <div>
                            <div class="product-item">
                                <div class="pi-img-wrapper">
                                    <img src="/assets/pages/img/products/model4.jpg" class="img-responsive"
                                        alt="Berry Lace Dress">
                                    <div>
                                        <a href="/assets/pages/img/products/model4.jpg"
                                            class="btn btn-default fancybox-button">Zoom</a>
                                        <a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
                                    </div>
                                </div>
                                <h3><a href="javascript:;">Berry Lace Dress4</a></h3>
                                <div class="pi-price">$29.00</div>
                                <a href="javascript:;" class="btn btn-default add2cart">Add to cart</a>
                                <div class="sticker sticker-new"></div>
                            </div>
                        </div>
                        <div>
                            <div class="product-item">
                                <div class="pi-img-wrapper">
                                    <img src="/assets/pages/img/products/model5.jpg" class="img-responsive"
                                        alt="Berry Lace Dress">
                                    <div>
                                        <a href="/assets/pages/img/products/model5.jpg"
                                            class="btn btn-default fancybox-button">Zoom</a>
                                        <a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
                                    </div>
                                </div>
                                <h3><a href="shop-item.html">Berry Lace Dress5</a></h3>
                                <div class="pi-price">$29.00</div>
                                <a href="javascript:;" class="btn btn-default add2cart">Add to cart</a>
                            </div>
                        </div>
                        <div>
                            <div class="product-item">
                                <div class="pi-img-wrapper">
                                    <img src="/assets/pages/img/products/model3.jpg" class="img-responsive"
                                        alt="Berry Lace Dress">
                                    <div>
                                        <a href="/assets/pages/img/products/model3.jpg"
                                            class="btn btn-default fancybox-button">Zoom</a>
                                        <a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
                                    </div>
                                </div>
                                <h3><a href="shop-item.html">Berry Lace Dress3</a></h3>
                                <div class="pi-price">$29.00</div>
                                <a href="javascript:;" class="btn btn-default add2cart">Add to cart</a>
                            </div>
                        </div>
                        <div>
                            <div class="product-item">
                                <div class="pi-img-wrapper">
                                    <img src="/assets/pages/img/products/model7.jpg" class="img-responsive"
                                        alt="Berry Lace Dress">
                                    <div>
                                        <a href="/assets/pages/img/products/model7.jpg"
                                            class="btn btn-default fancybox-button">Zoom</a>
                                        <a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
                                    </div>
                                </div>
                                <h3><a href="shop-item.html">Berry Lace Dress3</a></h3>
                                <div class="pi-price">$29.00</div>
                                <a href="javascript:;" class="btn btn-default add2cart">Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endsection --}}
            <!-- END SALE PRODUCT -->
        </div>
        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40 ">
            <!-- BEGIN SIDEBAR -->
            <div class="sidebar col-md-3 col-sm-4">
                <ul class="list-group margin-bottom-25 sidebar-menu">
                    <li class="list-group-item clearfix"><a href="/"><i class="fa fa-angle-right"></i>
                            Categories</a></li>
                    @foreach ($categories as $category)
                        <li class="list-group-item clearfix"><a href="/category/{{ $category->id }}"><i
                                    class="fa fa-angle-right"></i>
                                {{ $category->name }}</a></li>
                    @endforeach
                    {{-- <li class="list-group-item clearfix dropdown">
                        <a href="shop-product-list.html">
                            <i class="fa fa-angle-right"></i>
                            Categories 
                        </a>
                        <ul class="dropdown-menu">
                            <li class="list-group-item dropdown clearfix">
                                <a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Shoes </a>
                                <ul class="dropdown-menu">
                                    <li class="list-group-item dropdown clearfix">
                                        <a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Classic
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="shop-product-list.html"><i class="fa fa-angle-right"></i>
                                                    Classic 1</a></li>
                                            <li><a href="shop-product-list.html"><i class="fa fa-angle-right"></i>
                                                    Classic 2</a></li>
                                        </ul>
                                    </li>
                                    <li class="list-group-item dropdown clearfix">
                                        <a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Sport
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="shop-product-list.html"><i class="fa fa-angle-right"></i>
                                                    Sport 1</a></li>
                                            <li><a href="shop-product-list.html"><i class="fa fa-angle-right"></i>
                                                    Sport 2</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Trainers</a>
                            </li>
                            <li><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Jeans</a></li>
                            <li><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Chinos</a></li>
                            <li><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> T-Shirts</a>
                            </li>
                        </ul>
                    </li> --}}
                    {{-- <li class="list-group-item clearfix"><a href="shop-product-list.html"><i class="fa fa-angle-right"></i>
                            Kids</a></li>
                    <li class="list-group-item clearfix"><a href="shop-product-list.html"><i class="fa fa-angle-right"></i>
                            Accessories</a></li>
                    <li class="list-group-item clearfix"><a href="shop-product-list.html"><i class="fa fa-angle-right"></i>
                            Sports</a></li>
                    <li class="list-group-item clearfix"><a href="shop-product-list.html"><i class="fa fa-angle-right"></i>
                            Brands</a></li>
                    <li class="list-group-item clearfix"><a href="shop-product-list.html"><i class="fa fa-angle-right"></i>
                            Electronics</a></li>
                    <li class="list-group-item clearfix"><a href="shop-product-list.html"><i class="fa fa-angle-right"></i>
                            Home & Garden</a></li>
                    <li class="list-group-item clearfix"><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> --}}
                    {{-- Custom Link</a></li> --}}
                </ul>
            </div>
            <!-- END SIDEBAR -->
            <!-- BEGIN CONTENT -->
            <div class="col-md-9 col-sm-8">
                <h2>Three items</h2>
                <div class="" style="">
                    @foreach ($products as $product)
                        <div>
                            <div class="col-md-4" style="margin-top: 10px">
                                <div class="product-item">
                                    <div class="pi-img-wrapper">
                                        <img src="/products/{{ $product->image }}" class="img-responsive"
                                            alt="Berry Lace Dress" style="height: 240px">
                                        <div>
                                            <a href="/products/{{ $product->image }}"
                                                class="btn btn-default fancybox-button">Zoom</a>
                                            <a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
                                        </div>
                                    </div>
                                    <h3><a id="" href="/product/{{ $product->id }}">{{ $product->name }}</a></h3>
                                    <div class="pi-price">${{ $product->price }}</div>

                                    {{-- Form --}}
                                    {{-- <form id="cart_form_{{ $product->id }}">
                                        @csrf

                                        <input type="number" value="1" min="1" name="quantity"
                                            class="form-control">
                                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                                        <input type="hidden" name="cart_quantity" id="cart_quantity"
                                            value="{{ $carts->pluck('quantity')->sum() }}">
                                        <input type="hidden" name="cart_total" id="cart_total"
                                            value="{{ $total }}">

                                        <input class="btn btn-primary" type="submit" value="Add To Cart">
                                    </form> --}}
                                    <div class="top-cart-info">
                                        <a href="javascript:void(0);" id="cart_quantity"
                                            class="top-cart-info-count"></a>
                                        <a href="javascript:void(0);" id="cart_total"
                                            class="top-cart-info-value"></a>
                                    </div>

                                    <form id="cart_form_{{ $product->id }}">
                                        @csrf

                                        <input type="number" value="1" min="1" name="quantity"
                                            class="form-control">
                                        <input type="hidden" name="product_id" value="{{ $product->id }}">

                                        <input class="btn btn-primary" type="submit" value="Add To Cart">
                                    </form>



                                    <script>
                                        $(document).ready(function() {
                                            $.ajaxSetup({
                                                headers: {
                                                    'x-csrf-token': $('meta[name="csrf-token"]').attr('content')
                                                }
                                            })

                                            $('#cart_form_{{ $product->id }}').submit(function(e) {
                                                e.preventDefault()
                                                var data = $('#cart_form_{{ $product->id }}').serialize();

                                                $.ajax({
                                                    url: '/add-to-cart',
                                                    type: 'POST',
                                                    data: data,
                                                    success: function(response) {
                                                        console.log(response)

                                                        var quantity = document.getElementById('cart_quantity');
                                                        var total =  document.getElementById('cart_total');

                                                        console.log(quantity.innerHTML = response.data.total_items)
                                                        console.log(total.innerHTML = response.data.total_price)
                                                        // // Get updated quantity and total from the page content
                                                        // var updatedQuantity = $("#cart_quantity").text().split(' ')[
                                                        // 0]; // Assuming "n items" format
                                                        // var updatedTotal = $("#cart_total").text().substring(
                                                        // 1); // Remove dollar sign

                                                        // // Log the updated values to the console
                                                        // console.log("Updated Quantity:", updatedQuantity);
                                                        // console.log("Updated Total:", updatedTotal);
                                                    }
                                                })
                                            })
                                        })
                                    </script>
                                    {{-- End form --}}

                                    <div class="sticker sticker-new"></div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div>
                        <div class="col-md-12" style="display: flex;justify-content:center; margin-top: 10px;">
                            {{ $products->links() }}
                        </div>
                    </div>

                </div>
                @foreach ($products as $product)
                    <div id="product-pop-up" style="display: none; width: 700px;">
                        <div class="productpage product-pop-up">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-3">
                                    <div class="product-main-image">

                                        <img src="/products/{{ $product->image }}" alt="Cool green dress with red bell"
                                            class="img-responsive">
                                    </div>
                                    <div class="product-other-images">
                                        <a href="javascript:;" class="active"><img alt="Berry Lace Dress"
                                                src="/assets/pages/img/products/model3.jpg"></a>
                                        <a href="javascript:;"><img alt="Berry Lace Dress"
                                                src="/assets/pages/img/products/model4.jpg"></a>
                                        <a href="javascript:;"><img alt="Berry Lace Dress"
                                                src="/assets/pages/img/products/model5.jpg"></a>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-9">
                                    <h2>{{ $product->name }}</h2>
                                    <div class="price-availability-block clearfix">
                                        <div class="price">
                                            <strong><span>$</span>{{ $product->price }}</strong>
                                            <em>$<span>62.00</span></em>
                                        </div>
                                        <div class="availability">
                                            Availability: <strong>In Stock</strong>
                                        </div>
                                    </div>
                                    <div class="description">
                                        <p>{{ $product->description }}</p>
                                    </div>
                                    <div class="product-page-options">
                                        <div class="pull-left">
                                            <label class="control-label">Size:</label>
                                            <select class="form-control input-sm">
                                                <option>L</option>
                                                <option>M</option>
                                                <option>XL</option>
                                            </select>
                                        </div>
                                        <div class="pull-left">
                                            <label class="control-label">Color:</label>
                                            <select class="form-control input-sm">
                                                <option>Red</option>
                                                <option>Blue</option>
                                                <option>Black</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="product-page-cart">
                                        <div class="product-quantity">
                                            <input id="product-quantity" type="text" value="1" readonly
                                                name="product-quantity" class="form-control input-sm">
                                        </div>
                                        <button class="btn btn-primary" type="submit">Add to cart</button>
                                        <a href="shop-item.html" class="btn btn-default">More details</a>
                                    </div>
                                </div>

                                <div class="sticker sticker-sale"></div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <!-- END CONTENT -->
            </div>
            <!-- END SIDEBAR & CONTENT -->

            <!-- BEGIN TWO PRODUCTS & PROMO -->
            <div class="row margin-bottom-35 ">
                <!-- BEGIN TWO PRODUCTS -->
                {{-- @section('twoitems')
                <div class="col-md-6 two-items-bottom-items">
                    <h2>Two items</h2>
                    <div class="owl-carousel owl-carousel2">
                        <div>
                            <div class="product-item">
                                <div class="pi-img-wrapper">
                                    <img src="/assets/pages/img/products/k4.jpg" class="img-responsive"
                                        alt="Berry Lace Dress">
                                    <div>
                                        <a href="/assets/pages/img/products/k4.jpg"
                                            class="btn btn-default fancybox-button">Zoom</a>
                                        <a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
                                    </div>
                                </div>
                                <h3><a href="shop-item.html">Berry Lace Dress</a></h3>
                                <div class="pi-price">$29.00</div>
                                <a href="javascript:;" class="btn btn-default add2cart">Add to cart</a>
                            </div>
                        </div>
                        <div>
                            <div class="product-item">
                                <div class="pi-img-wrapper">
                                    <img src="/assets/pages/img/products/k2.jpg" class="img-responsive"
                                        alt="Berry Lace Dress">
                                    <div>
                                        <a href="/assets/pages/img/products/k2.jpg"
                                            class="btn btn-default fancybox-button">Zoom</a>
                                        <a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
                                    </div>
                                </div>
                                <h3><a href="shop-item.html">Berry Lace Dress</a></h3>
                                <div class="pi-price">$29.00</div>
                                <a href="javascript:;" class="btn btn-default add2cart">Add to cart</a>
                            </div>
                        </div>
                        <div>
                            <div class="product-item">
                                <div class="pi-img-wrapper">
                                    <img src="/assets/pages/img/products/k3.jpg" class="img-responsive"
                                        alt="Berry Lace Dress">
                                    <div>
                                        <a href="/assets/pages/img/products/k3.jpg"
                                            class="btn btn-default fancybox-button">Zoom</a>
                                        <a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
                                    </div>
                                </div>
                                <h3><a href="shop-item.html">Berry Lace Dress</a></h3>
                                <div class="pi-price">$29.00</div>
                                <a href="javascript:;" class="btn btn-default add2cart">Add to cart</a>
                            </div>
                        </div>
                        <div>
                            <div class="product-item">
                                <div class="pi-img-wrapper">
                                    <img src="/assets/pages/img/products/k1.jpg" class="img-responsive"
                                        alt="Berry Lace Dress">
                                    <div>
                                        <a href="/assets/pages/img/products/k1.jpg"
                                            class="btn btn-default fancybox-button">Zoom</a>
                                        <a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
                                    </div>
                                </div>
                                <h3><a href="shop-item.html">Berry Lace Dress</a></h3>
                                <div class="pi-price">$29.00</div>
                                <a href="javascript:;" class="btn btn-default add2cart">Add to cart</a>
                            </div>
                        </div>
                        <div>
                            <div class="product-item">
                                <div class="pi-img-wrapper">
                                    <img src="/assets/pages/img/products/k4.jpg" class="img-responsive"
                                        alt="Berry Lace Dress">
                                    <div>
                                        <a href="/assets/pages/img/products/k4.jpg"
                                            class="btn btn-default fancybox-button">Zoom</a>
                                        <a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
                                    </div>
                                </div>
                                <h3><a href="shop-item.html">Berry Lace Dress</a></h3>
                                <div class="pi-price">$29.00</div>
                                <a href="javascript:;" class="btn btn-default add2cart">Add to cart</a>
                            </div>
                        </div>
                        <div>
                            <div class="product-item">
                                <div class="pi-img-wrapper">
                                    <img src="/assets/pages/img/products/k3.jpg" class="img-responsive"
                                        alt="Berry Lace Dress">
                                    <div>
                                        <a href="/assets/pages/img/products/k3.jpg"
                                            class="btn btn-default fancybox-button">Zoom</a>
                                        <a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
                                    </div>
                                </div>
                                <h3><a href="shop-item.html">Berry Lace Dress</a></h3>
                                <div class="pi-price">$29.00</div>
                                <a href="javascript:;" class="btn btn-default add2cart">Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 shop-index-carousel">
                    <div class="content-slider">
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                <li data-target="#myCarousel" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="/assets/pages/img/index-sliders/slide1.jpg" class="img-responsive"
                                        alt="Berry Lace Dress">
                                </div>
                                <div class="item">
                                    <img src="/assets/pages/img/index-sliders/slide2.jpg" class="img-responsive"
                                        alt="Berry Lace Dress">
                                </div>
                                <div class="item">
                                    <img src="/assets/pages/img/index-sliders/slide3.jpg" class="img-responsive"
                                        alt="Berry Lace Dress">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endsection --}}
            @section('brands')
                <div class="brands">
                    <div class="container">
                        <div class="owl-carousel owl-carousel6-brands">
                            <a href="shop-product-list.html"><img src="/assets/pages/img/brands/canon.jpg" alt="canon"
                                    title="canon"></a>
                            <a href="shop-product-list.html"><img src="/assets/pages/img/brands/esprit.jpg"
                                    alt="esprit" title="esprit"></a>
                            <a href="shop-product-list.html"><img src="/assets/pages/img/brands/gap.jpg" alt="gap"
                                    title="gap"></a>
                            <a href="shop-product-list.html"><img src="/assets/pages/img/brands/next.jpg" alt="next"
                                    title="next"></a>
                            <a href="shop-product-list.html"><img src="/assets/pages/img/brands/puma.jpg" alt="puma"
                                    title="puma"></a>
                            <a href="shop-product-list.html"><img src="/assets/pages/img/brands/zara.jpg" alt="zara"
                                    title="zara"></a>
                            <a href="shop-product-list.html"><img src="/assets/pages/img/brands/canon.jpg" alt="canon"
                                    title="canon"></a>
                            <a href="shop-product-list.html"><img src="/assets/pages/img/brands/esprit.jpg"
                                    alt="esprit" title="esprit"></a>
                            <a href="shop-product-list.html"><img src="/assets/pages/img/brands/gap.jpg" alt="gap"
                                    title="gap"></a>
                            <a href="shop-product-list.html"><img src="/assets/pages/img/brands/next.jpg" alt="next"
                                    title="next"></a>
                            <a href="shop-product-list.html"><img src="/assets/pages/img/brands/puma.jpg" alt="puma"
                                    title="puma"></a>
                            <a href="shop-product-list.html"><img src="/assets/pages/img/brands/zara.jpg" alt="zara"
                                    title="zara"></a>
                        </div>
                    </div>
                </div>
            @endsection
            <!-- END TWO PRODUCTS -->
            <!-- BEGIN PROMO -->
            <!-- END PROMO -->
        </div>
        <!-- END TWO PRODUCTS & PROMO -->
    </div>

</div>

<!-- BEGIN BRANDS -->
@endsection
