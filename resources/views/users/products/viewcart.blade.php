@extends('layouts.user.app')

@section('content')
    <div class="container">
        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">
            <!-- BEGIN CONTENT -->
            <div class="col-md-12 col-sm-12">
                <h1>Shopping cart</h1>
                <div class="goods-page">
                    <div class="goods-data clearfix">
                        <div class="table-wrapper-responsive">
                            <table summary="Shopping cart">
                                <tr>
                                    <th class="goods-page-image">Image</th>
                                    <th class="goods-page-description">Description</th>
                                    <th class="goods-page-ref-no">Ref No</th>
                                    <th class="goods-page-quantity">Quantity</th>
                                    <th class="goods-page-price">Unit price</th>
                                    <th class="goods-page-total" colspan="2">Total</th>
                                </tr>
                                @foreach ($carts as $cart)
                                    <tr>
                                        <td class="goods-page-image">
                                            <a href="javascript:;"><img src="/products/{{ $cart->image }}"
                                                    alt="Berry Lace Dress"></a>
                                        </td>
                                        <td class="goods-page-description">
                                            <h3><a href="javascript:;">{{ $cart->name }}</a></h3>
                                            
                                        </td>
                                        <td class="goods-page-ref-no">
                                            javc2133
                                        </td>
                                        <td class="goods-page-quantity">
                                            <div class="product-quantity">
                                                {{ $cart->quantity }}
                                            </div>
                                        </td>
                                        <td class="goods-page-price">
                                            <strong><span>$</span>{{ $cart->price }}</strong>
                                        </td>
                                        <td class="goods-page-total">
                                            <strong><span>$</span>{{ $cart->price * $cart->quantity }}</strong>
                                        </td>
                                        <td class="del-goods-col">
                                            {{-- <a class="del-goods" href="javascript:;">&nbsp;</a> --}}
                                            <div class="">
                                                <form action="/delete/13" method="POST">

                                                    <input type="hidden" name="_token"
                                                        value="ZidtTWLBchSuXKneUxK6saRyaeXY0nzBCAI6zvtI">

                                                    <input type="hidden" name="product_id" value="&nbsp;">

                                                    <input class="del-goods" type="submit" value="&nbsp;">

                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                {{-- <tr>
            <td class="goods-page-image">
              <a href="javascript:;"><img src="assets/pages/img/products/model4.jpg" alt="Berry Lace Dress"></a>
            </td>
            <td class="goods-page-description">
              <h3><a href="javascript:;">Cool green dress with red bell</a></h3>
              <p><strong>Item 1</strong> - Color: Green; Size: S</p>
              <em>More info is here</em>
            </td>
            <td class="goods-page-ref-no">
              javc2133
            </td>
            <td class="goods-page-quantity">
              <div class="product-quantity">
                  <input id="product-quantity2" type="text" value="1" readonly class="form-control input-sm">
              </div>
            </td>
            <td class="goods-page-price">
              <strong><span>$</span>47.00</strong>
            </td>
            <td class="goods-page-total">
              <strong><span>$</span>47.00</strong>
            </td>
            <td class="del-goods-col">
              <a class="del-goods" href="javascript:;">&nbsp;</a>
            </td>
          </tr> --}}
                            </table>
                        </div>

                        <div class="shopping-total">
                            <ul>
                                <li>
                                    <em>Sub total</em>
                                    <strong class="price"><span>$</span>{{ $total }}</strong>
                                </li>
                                <li>
                                    <em>Shipping cost</em>
                                    <strong class="price"><span>$</span>3.00</strong>
                                </li>
                                <li class="shopping-total-price">
                                    <em>Total</em>
                                    <strong class="price"><span>$</span>50.00</strong>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <button class="btn btn-default" type="submit">Continue shopping <i
                            class="fa fa-shopping-cart"></i></button>
                    <a href="/checkout" class="btn btn-primary">Checkout <i class="fa fa-check"></i></a>
                </div>
            </div>
            <!-- END CONTENT -->
        </div>
        <!-- END SIDEBAR & CONTENT -->

        <!-- BEGIN SIMILAR PRODUCTS -->
        <div class="row margin-bottom-40">
            <div class="col-md-12 col-sm-12">
                <h2>Most popular products</h2>
                <div class="owl-carousel owl-carousel4">
                    <div>
                        <div class="product-item">
                            <div class="pi-img-wrapper">
                                <img src="assets/pages/img/products/k1.jpg" class="img-responsive" alt="Berry Lace Dress">
                                <div>
                                    <a href="assets/pages/img/products/k1.jpg"
                                        class="btn btn-default fancybox-button">Zoom</a>
                                    <a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
                                </div>
                            </div>
                            <h3><a href="shop-item.html">Berry Lace Dress</a></h3>
                            <div class="pi-price">$29.00</div>
                            <a href="javascript:;" class="btn btn-default add2cart">Add to cart</a>
                            <div class="sticker sticker-new"></div>
                        </div>
                    </div>
                    <div>
                        <div class="product-item">
                            <div class="pi-img-wrapper">
                                <img src="assets/pages/img/products/k2.jpg" class="img-responsive" alt="Berry Lace Dress">
                                <div>
                                    <a href="assets/pages/img/products/k2.jpg"
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
                                <img src="assets/pages/img/products/k3.jpg" class="img-responsive" alt="Berry Lace Dress">
                                <div>
                                    <a href="assets/pages/img/products/k3.jpg"
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
                                <img src="assets/pages/img/products/k4.jpg" class="img-responsive" alt="Berry Lace Dress">
                                <div>
                                    <a href="assets/pages/img/products/k4.jpg"
                                        class="btn btn-default fancybox-button">Zoom</a>
                                    <a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
                                </div>
                            </div>
                            <h3><a href="shop-item.html">Berry Lace Dress4</a></h3>
                            <div class="pi-price">$29.00</div>
                            <a href="javascript:;" class="btn btn-default add2cart">Add to cart</a>
                            <div class="sticker sticker-sale"></div>
                        </div>
                    </div>
                    <div>
                        <div class="product-item">
                            <div class="pi-img-wrapper">
                                <img src="assets/pages/img/products/k1.jpg" class="img-responsive"
                                    alt="Berry Lace Dress">
                                <div>
                                    <a href="assets/pages/img/products/k1.jpg"
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
                                <img src="assets/pages/img/products/k2.jpg" class="img-responsive"
                                    alt="Berry Lace Dress">
                                <div>
                                    <a href="assets/pages/img/products/k2.jpg"
                                        class="btn btn-default fancybox-button">Zoom</a>
                                    <a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
                                </div>
                            </div>
                            <h3><a href="shop-item.html">Berry Lace Dress6</a></h3>
                            <div class="pi-price">$29.00</div>
                            <a href="javascript:;" class="btn btn-default add2cart">Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END SIMILAR PRODUCTS -->
    </div>
@endsection





{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/css/bootstrap.min.css'>
    <title>Cart</title>
    <style>
        /* section {
            margin: 3em auto;
            max-width: 48rem;
            background-color: rgb(43, 44, 45);
            padding: 2rem;
            border-radius: 0.3rem;
            height: 24rem;

            display: grid;
            grid-template-columns: repeat(4, auto);
            gap: 2rem 1rem;
            justify-content: space-between;
            align-content: space-around;
        }

        img {
            width: 4.4rem;
            border-radius: 0.3rem;
        }

        h3 {
            color: rgb(179, 234, 243);
            margin: 0 auto;
        }

        p {
            font-size: 0.8rem;
            color: white;
            margin: 0 auto;
        }

        span {
            color: #999;
            font-size: 0.8rem;
        }

        .price {
            font-size: 1.2rem;
            font-weight: bold;
            color: white;
        }

        .desc {

            font-size: 15px;
            margin: 0 auto;


        }

        .quan {
            color: white;
        }

        .img {
            width: 4.4rem;
            border-radius: 0.3rem;
        } */
        .mr-2 {
            margin-right: 20px;
        }

        .divTable {
            display: table;
            width: 100%;
        }

        .rowTable {
            display: table-row;
        }

        .divTableHeading {
            display: table-header-group;
        }

        .divTableCol,
        .divTableHead {
            border-bottom: 1px solid #eee;
            display: table-cell;
            padding: 3px 10px;
        }

        .divTableHeading {
            background-color: #EEE;
            display: table-header-group;
            font-weight: bold;
        }

        .divTableFoot {
            background-color: #EEE;
            display: table-footer-group;
            font-weight: bold;
        }

        .divTableBody {
            display: table-row-group;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="divTable div-hover">

            <div class="rowTable bg-primary text-white pb-2">
                <div class="divTableCol">Product</div>
                <div class="divTableCol">Quantity</div>
                <div class="divTableCol">Price</div>
                <div class="divTableCol">Total</div>
                <div class="divTableCol">Actions</div>
            </div>
            @foreach ($carts as $cart)
                <div class="rowTable">
                    <div class="divTableCol">
                        <div class="media">
                            <a class=" pull-left mr-2 ml-0" href="">
                                <img class="img-fluid" src="/products/{{ $cart->image }}"
                                    style="width: 92px; height: 72px; margin-left: 0" />
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">{{ $cart->name }}</h4>
                                <h5 class="media-heading">{{ $cart->descripton }}</h5>
                            </div>
                        </div>
                    </div>
                    <div class="divTableCol">
                        {{ $cart->quantity }}
                    </div>
                    <div class="divTableCol"><strong>${{ $cart->price }}</strong></div>
                    <div class="divTableCol"><strong>${{ $cart->price * $cart->quantity }}</strong></div>
                    <div class="divTableCol">
                        <form action="/delete/{{ $cart->id }}" method="POST">

                            @csrf


                            <input type="hidden" name="product_id" value="Remove">

                            <input class="btn btn-danger" type="submit" value="Remove">

                        </form>
                    </div>
                </div>
            @endforeach
            <div class="rowTable">
                <div class="divTableCol"></div>
                <div class="divTableCol"></div>
                <div class="divTableCol"></div>
                <div class="divTableCol">
                    <h3>Total</h3>
                </div>
                <div class="divTableCol">
                    <h3><strong>${{ $total }}</strong></h3>
                </div>
            </div>
            <div class="rowTable">
                <div class="divTableCol"></div>
                <div class="divTableCol"></div>
                <div class="divTableCol"></div>
                <div class="divTableCol">
                </div>
                <div class="divTableCol">
                    <a href="/checkout" class="btn btn-sm btn-primary mx-2" style="float:right;">Checkout</a>
                </div>
            </div>
        </div>
    </div>

</body>

</html> --}}
