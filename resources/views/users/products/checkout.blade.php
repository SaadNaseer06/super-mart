@extends('layouts.user.app')

<head>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <style>
        html,
        body,
        .wrapper {
            background: #f7f7f7;
        }

        .steps {
            margin-top: -41px;
            display: inline-block;
            float: right;
            font-size: 16px
        }

        .step {
            float: left;
            background: white;
            padding: 7px 13px;
            border-radius: 1px;
            text-align: center;
            width: 100px;
            position: relative
        }

        .step_line {
            margin: 0;
            width: 0;
            height: 0;
            border-left: 16px solid #fff;
            border-top: 16px solid transparent;
            border-bottom: 16px solid transparent;
            z-index: 1008;
            position: absolute;
            left: 99px;
            top: 1px
        }

        .step_line.backline {
            border-left: 20px solid #f7f7f7;
            border-top: 20px solid transparent;
            border-bottom: 20px solid transparent;
            z-index: 1006;
            position: absolute;
            left: 99px;
            top: -3px
        }

        .step_complete {
            background: #357ebd
        }

        .step_complete a.check-bc,
        .step_complete a.check-bc:hover,
        .afix-1,
        .afix-1:hover {
            color: #eee;
        }

        .step_line.step_complete {
            background: 0;
            border-left: 16px solid #357ebd
        }

        .step_thankyou {
            float: left;
            background: white;
            padding: 7px 13px;
            border-radius: 1px;
            text-align: center;
            width: 100px;
        }

        .step.check_step {
            margin-left: 5px;
        }

        .ch_pp {
            text-decoration: underline;
        }

        .ch_pp.sip {
            margin-left: 10px;
        }

        .check-bc,
        .check-bc:hover {
            color: #222;
        }

        .SuccessField {
            border-color: #458845 !important;
            -webkit-box-shadow: 0 0 7px #9acc9a !important;
            -moz-box-shadow: 0 0 7px #9acc9a !important;
            box-shadow: 0 0 7px #9acc9a !important;
            background: #f9f9f9 url(../images/valid.png) no-repeat 98% center !important
        }

        .btn-xs {
            line-height: 28px;
        }

        /*login form*/
        .login-container {
            margin-top: 30px;
        }

        .login-container input[type=submit] {
            width: 100%;
            display: block;
            margin-bottom: 10px;
            position: relative;
        }

        .login-container input[type=text],
        input[type=password] {
            height: 44px;
            font-size: 16px;
            width: 100%;
            margin-bottom: 10px;
            -webkit-appearance: none;
            background: #fff;
            border: 1px solid #d9d9d9;
            border-top: 1px solid #c0c0c0;
            /* border-radius: 2px; */
            padding: 0 8px;
            box-sizing: border-box;
            -moz-box-sizing: border-box;
        }

        .login-container input[type=text]:hover,
        input[type=password]:hover {
            border: 1px solid #b9b9b9;
            border-top: 1px solid #a0a0a0;
            -moz-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
            -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
            box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
        }

        .login-container-submit {
            /* border: 1px solid #3079ed; */
            border: 0px;
            color: #fff;
            text-shadow: 0 1px rgba(0, 0, 0, 0.1);
            background-color: #357ebd;
            /*#4d90fe;*/
            padding: 17px 0px;
            font-family: roboto;
            font-size: 14px;
            /* background-image: -webkit-gradient(linear, 0 0, 0 100%,   from(#4d90fe), to(#4787ed)); */
        }

        .login-container-submit:hover {
            /* border: 1px solid #2f5bb7; */
            border: 0px;
            text-shadow: 0 1px rgba(0, 0, 0, 0.3);
            background-color: #357ae8;
            /* background-image: -webkit-gradient(linear, 0 0, 0 100%,   from(#4d90fe), to(#357ae8)); */
        }

        .login-help {
            font-size: 12px;
        }

        .asterix {
            background: #f9f9f9 url(../images/red_asterisk.png) no-repeat 98% center !important;
        }

        /* images*/
        ol,
        ul {
            list-style: none;
        }

        .hand {
            cursor: pointer;
            cursor: pointer;
        }

        .cards {
            padding-left: 0;
        }

        .cards li {
            -webkit-transition: all .2s;
            -moz-transition: all .2s;
            -ms-transition: all .2s;
            -o-transition: all .2s;
            transition: all .2s;
            background-image: url('//c2.staticflickr.com/4/3713/20116660060_f1e51a5248_m.jpg');
            background-position: 0 0;
            float: left;
            height: 32px;
            margin-right: 8px;
            text-indent: -9999px;
            width: 51px;
        }

        .cards .mastercard {
            background-position: -51px 0;
        }

        .cards li {
            -webkit-transition: all .2s;
            -moz-transition: all .2s;
            -ms-transition: all .2s;
            -o-transition: all .2s;
            transition: all .2s;
            background-image: url('//c2.staticflickr.com/4/3713/20116660060_f1e51a5248_m.jpg');
            background-position: 0 0;
            float: left;
            height: 32px;
            margin-right: 8px;
            text-indent: -9999px;
            width: 51px;
        }

        .cards .amex {
            background-position: -102px 0;
        }

        .cards li {
            -webkit-transition: all .2s;
            -moz-transition: all .2s;
            -ms-transition: all .2s;
            -o-transition: all .2s;
            transition: all .2s;
            background-image: url('//c2.staticflickr.com/4/3713/20116660060_f1e51a5248_m.jpg');
            background-position: 0 0;
            float: left;
            height: 32px;
            margin-right: 8px;
            text-indent: -9999px;
            width: 51px;
        }

        .cards li:last-child {
            margin-right: 0;
        }

        /* images end */



        /*
                 * BOOTSTRAP
                 */
        .container {
            border: none;
        }

        .panel-footer {
            background: #fff;
        }

        .btn {
            border-radius: 1px;
        }

        .btn-sm,
        .btn-group-sm>.btn {
            border-radius: 1px;
        }

        .input-sm,
        .form-horizontal .form-group-sm .form-control {
            border-radius: 1px;
        }

        .panel-info {
            border-color: #999;
        }

        .panel-heading {
            border-top-left-radius: 1px;
            border-top-right-radius: 1px;
        }

        .panel {
            border-radius: 1px;
        }

        .panel-info>.panel-heading {
            color: #eee;
            border-color: #999;
        }

        .panel-info>.panel-heading {
            background-image: linear-gradient(to bottom, #555 0px, #888 100%);
        }

        hr {
            border-color: #999 -moz-use-text-color -moz-use-text-color;
        }

        .panel-footer {
            border-bottom-left-radius: 1px;
            border-bottom-right-radius: 1px;
            border-top: 1px solid #999;
        }

        .btn-link {
            color: #888;
        }

        hr {
            margin-bottom: 10px;
            margin-top: 10px;
        }

        /** MEDIA QUERIES **/
        @media only screen and (max-width: 989px) {
            .span1 {
                margin-bottom: 15px;
                clear: both;
            }
        }

        @media only screen and (max-width: 764px) {
            .inverse-1 {
                float: right;
            }
        }

        @media only screen and (max-width: 586px) {
            .cart-titles {
                display: none;
            }

            .panel {
                margin-bottom: 1px;
            }
        }

        .form-control {
            border-radius: 1px;
        }

        @media only screen and (max-width: 486px) {
            .col-xss-12 {
                width: 100%;
            }

            .cart-img-show {
                display: none;
            }

            .btn-submit-fix {
                width: 100%;
            }

        }

        /*
                @media only screen and (max-width: 777px){
                    .container{
                        overflow-x: hidden;
                    }
                }*/
    </style>

</head>

@section('content')
    <div class="main">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li><a href="">Store</a></li>
                <li class="active">Checkout</li>
            </ul>
            <!-- BEGIN SIDEBAR & CONTENT -->
            <div class="row margin-bottom-40">
                <!-- BEGIN CONTENT -->
                <div class="col-md-8 col-sm-12">
                    <h1>Checkout</h1>
                    <!-- BEGIN CHECKOUT PAGE -->
                    <div class="panel-group checkout-page accordion scrollable" id="checkout-page">
                        <div id="shipping-address" class="panel panel-default">
                            <div class="panel-heading">
                                <h2 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#checkout-page" href="#shipping-address-content"
                                        class="accordion-toggle">
                                        Step 3: Delivery Details
                                    </a>
                                </h2>
                            </div>
                            <div id="shipping-address-content" class="panel-collapse collapse in">
                                <div class="panel-body row">
                                    <form action="{{ route('charge.post') }}" method="post" id="payment-form">
                                        @csrf
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <label for="firstname">First Name <span class="require">*</span></label>
                                                <input type="text" name="firstname" id="firstname" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="lastname">Last Name <span class="require">*</span></label>
                                                <input type="text" id="lastname" name="lastname" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="email">E-Mail <span class="require">*</span></label>
                                                <input type="text" id="email" name="email" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="contact">Telephone <span class="require">*</span></label>
                                                <input type="text" id="contact" name="contact" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="fax">Fax</label>
                                                <input type="text" name="fax" id="fax" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="company">Company</label>
                                                <input type="text" name="company" id="company" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <label for="address">Address</label>
                                                <input type="text" id="address" name="address" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="postalcode">Postal Code <span class="require">*</span></label>
                                                <input type="number" id="postalcode" name="postalcode"
                                                    class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="city">City <span class="require">*</span></label>
                                                <input type="text" id="city" name="city" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="country">Country <span class="require">*</span></label>
                                                <input type="text" id="country" name="country" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="state">State/Region <span class="require">*</span></label>
                                                <input type="text" id="state" name="state" class="form-control">
                                            </div>
                                            <h1>Price: {{ $total }}</h1>
                                            <input type="hidden" value="{{ $total }}" name="price">

                                        </div>
                                        {{-- <div class="col-md-12">
                                            <button class="btn btn-primary  pull-right" type="submit"
                                                id="button-shipping-address" data-toggle="collapse"
                                                data-parent="#checkout-page"
                                                data-target="#shipping-method-content">Continue</button>
                                        </div> --}}
                                </div>
                            </div>
                        </div>


                        <!-- BEGIN CONFIRM -->
                        <!-- END CONFIRM -->
                    </div>
                    <!-- END CHECKOUT PAGE -->
                </div>
                <div class="col-md-4" style="margin-top: 28px">
                    <div class="panel-group checkout-page accordion scrollable" id="checkout-page">


                        <div id="shipping-address" class="panel panel-default">
                            <div class="panel-heading">
                                <div id="confirm" class="panel panel-default">
                                    <div class="panel-heading">
                                        <h2 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#checkout-page"
                                                href="#confirm-content" class="accordion-toggle">
                                                Step 6: Confirm Order
                                            </a>
                                        </h2>
                                    </div>
                                    <div id="confirm-content" class="panel-collapse collapse in">
                                        <div class="panel-body row">
                                            <div class="col-md-12 clearfix">
                                                <div class="table-wrapper-responsive">
                                                    <table>
                                                        <tr>
                                                            <th class="checkout-image">Image</th>
                                                            <th class="checkout-description">Name</th>
                                                            {{-- <th class="checkout-model">Model</th> --}}
                                                            <th class="checkout-quantity">Quantity</th>
                                                            <th class="checkout-price">Price</th>
                                                            <th class="checkout-total">Total</th>
                                                        </tr>
                                                        @foreach ($products as $product)
                                                            <tr>
                                                                <td class="checkout-image">
                                                                    <a href="javascript:;"><img
                                                                            src="/products/{{ $product->image }}"
                                                                            alt="Berry Lace Dress" style="width:40px;"></a>
                                                                </td>
                                                                <td class="checkout-description">
                                                                    <h3><a href="javascript:;">{{ $product->name }}</a>
                                                                    </h3>

                                                                </td>
                                                                {{-- <td class="checkout-model">RES.193</td> --}}
                                                                <td class="checkout-quantity">{{ $product->quantity }}</td>
                                                                <td class="checkout-price">
                                                                    <strong><span>$</span>{{ $product->price }}</strong>
                                                                </td>
                                                                <td class="checkout-total">
                                                                    <strong><span>$</span>{{ $total }}</strong>
                                                                </td>
                                                            </tr>
                                                        @endforeach

                                                    </table>
                                                </div>
                                                <div class="checkout-total-block">
                                                    <ul>
                                                        <li class="checkout-total-price">
                                                            <em>Total</em>
                                                            <strong
                                                                class="price"><span>$</span>{{ $total }}</strong>
                                                            <input type="hidden" value="{{ $total }}">
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                                {{-- <button class="btn btn-primary pull-right" type="submit"
                                        id="button-confirm">Proceed to pay</button>
                                    <a href="/" class="btn btn-default pull-right margin-right-20">Cancel</a> --}}
                                            </div>
                                            <div class="py-12">
                                                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                                                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                                                        <div class="p-6">
                                                            {{-- <input type="hidden" name="firstname"
                                                value="{{ $order[0]->firstname }}"> --}}
                                                            <div class="w-1/2 form-row">
                                                                <label for="cardholder-name">Cardholder's Name</label>
                                                                <div>
                                                                    <input type="text" id="cardholder-name"
                                                                        class="px-2 py-2 border">
                                                                </div>

                                                                <label for="card-element">
                                                                    Credit or debit card
                                                                </label>
                                                                <div id="card-element">

                                                                </div>


                                                                <div id="card-errors" role="alert"></div>
                                                            </div>

                                                            <button class="mt-4 btn btn-primary pull-right">
                                                                Proceed to Pay
                                                            </button>
                                                            <a href="/"
                                                                class="btn btn-default pull-right margin-right-20">Cancel</a>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://js.stripe.com/v3/"></script>

    <script>
        var stripe = Stripe(
            'pk_test_51NxdjRCSyBWbphf6pO4ISsfCvz8bGhQ3xR0nCRwqiiK4i3pmbYm7yBAITbx347BF5Gu23syXkvyoZ2451kCIWBMT00XEadWPlf'
        );

        var elements = stripe.elements();

        var style = {
            base: {
                color: '#32325d',
                fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
                fontSmoothing: 'antialiased',
                fontSize: '16px',
                '::placeholder': {
                    color: '#aab7c4'
                }
            },
            invalid: {
                color: '#fa755a',
                iconColor: '#fa755a'
            }
        };

        var card = elements.create('card', {
            style: style
        });

        card.mount('#card-element');

        card.on('change', function(event) {
            var displayError = document.getElementById('card-errors');
            if (event.error) {
                displayError.textContent = event.error.message;
            } else {
                displayError.textContent = '';
            }
        });

        var form = document.getElementById('payment-form');
        var cardHolderName = document.getElementById('cardholder-name');
        form.addEventListener('submit', async function(event) {
            event.preventDefault();
            const {
                paymentMethod,
                error
            } = await stripe.createPaymentMethod(
                'card', card, {
                    billing_details: {
                        name: cardHolderName.value
                    }
                }
            );
            if (error) {

                var errorElement = document.getElementById('card-errors');
                errorElement.textContent = error.message;
            } else {
                stripeTokenHandler(paymentMethod);
            }
        });

        function stripeTokenHandler(paymentMethod) {
            var form = document.getElementById('payment-form');
            var hiddenInput = document.createElement('input');
            hiddenInput.setAttribute('type', 'hidden');
            hiddenInput.setAttribute('name', 'paymentMethod');
            hiddenInput.setAttribute('value', paymentMethod.id);

            console.log(hiddenInput)
            form.appendChild(hiddenInput);
            // Submit the form
            form.submit();
        }
    </script>
@endsection


</body>


</html>
