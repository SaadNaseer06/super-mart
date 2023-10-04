@extends('layouts.user.app')

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
                <div class="col-md-12 col-sm-12">
                    <h1>Checkout</h1>
                    <!-- BEGIN CHECKOUT PAGE -->
                    <div class="panel-group checkout-page accordion scrollable" id="checkout-page">

                        <!-- BEGIN CHECKOUT -->
                        {{-- <div id="checkout" class="panel panel-default">
                            <div class="panel-heading">
                                <h2 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#checkout-page" href="#checkout-content"
                                        class="accordion-toggle">
                                        Step 1: Checkout Options
                                    </a>
                                </h2>
                            </div>
                            <div id="checkout-content" class="panel-collapse collapse in">
                                <div class="panel-body row">
                                    <div class="col-md-6 col-sm-6">
                                        <h3>New Customer</h3>
                                        <p>Checkout Options:</p>
                                        <div class="radio-list">
                                            <label>
                                                <input type="radio" name="account" value="register"> Register
                                                Account
                                            </label>
                                            <label>
                                                <input type="radio" name="account" value="guest"> Guest Checkout
                                            </label>
                                        </div>
                                        <p>By creating an account you will be able to shop faster, be up to date on an
                                            order's status, and keep track of the orders you have previously made.</p>
                                        <button class="btn btn-primary" type="submit" data-toggle="collapse"
                                            data-parent="#checkout-page"
                                            data-target="#payment-address-content">Continue</button>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <h3>Returning Customer</h3>
                                        <p>I am a returning customer.</p>
                                        <form role="form" action="#">
                                            <div class="form-group">
                                                <label for="email-login">E-Mail</label>
                                                <input type="text" id="email-login" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="password-login">Password</label>
                                                <input type="password" id="password-login" class="form-control">
                                            </div>
                                            <a href="javascript:;">Forgotten Password?</a>
                                            <div class="padding-top-20">
                                                <button class="btn btn-primary" type="submit">Login</button>
                                            </div>
                                            <hr>
                                            <div class="login-socio">
                                                <p class="text-muted">or login using:</p>
                                                <ul class="social-icons">
                                                    <li><a href="javascript:;" data-original-title="facebook"
                                                            class="facebook" title="facebook"></a></li>
                                                    <li><a href="javascript:;" data-original-title="Twitter" class="twitter"
                                                            title="Twitter"></a></li>
                                                    <li><a href="javascript:;" data-original-title="Google Plus"
                                                            class="googleplus" title="Google Plus"></a></li>
                                                    <li><a href="javascript:;" data-original-title="Linkedin"
                                                            class="linkedin" title="LinkedIn"></a></li>
                                                </ul>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <!-- END CHECKOUT -->

                        <!-- BEGIN PAYMENT ADDRESS -->
                        {{-- <div id="payment-address" class="panel panel-default">
                            <div class="panel-heading">
                                <h2 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#checkout-page" href="#payment-address-content"
                                        class="accordion-toggle">
                                        Step 2: Account &amp; Billing Details
                                    </a>
                                </h2>
                            </div>
                            <div id="payment-address-content" class="panel-collapse collapse">
                                <div class="panel-body row">
                                    <div class="col-md-6 col-sm-6">
                                        <h3>Your Personal Details</h3>
                                        <div class="form-group">
                                            <label for="firstname">First Name <span class="require">*</span></label>
                                            <input type="text" id="firstname" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="lastname">Last Name <span class="require">*</span></label>
                                            <input type="text" id="lastname" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">E-Mail <span class="require">*</span></label>
                                            <input type="text" id="email" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="telephone">Telephone <span class="require">*</span></label>
                                            <input type="text" id="telephone" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="fax">Fax</label>
                                            <input type="text" id="fax" class="form-control">
                                        </div>

                                        <h3>Your Password</h3>
                                        <div class="form-group">
                                            <label for="password">Password <span class="require">*</span></label>
                                            <input type="password" id="password" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="password-confirm">Password Confirm <span
                                                    class="require">*</span></label>
                                            <input type="text" id="password-confirm" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <h3>Your Address</h3>
                                        <div class="form-group">
                                            <label for="company">Company</label>
                                            <input type="text" id="company" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="address1">Address 1</label>
                                            <input type="text" id="address1" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="address2">Address 2</label>
                                            <input type="text" id="address2" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="city">City <span class="require">*</span></label>
                                            <input type="text" id="city" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="post-code">Post Code <span class="require">*</span></label>
                                            <input type="text" id="post-code" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="country">Country <span class="require">*</span></label>
                                            <select class="form-control input-sm" id="country">
                                                <option value=""> --- Please Select --- </option>
                                                <option value="244">Aaland Islands</option>
                                                <option value="1">Afghanistan</option>
                                                <option value="2">Albania</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="region-state">Region/State <span class="require">*</span></label>
                                            <select class="form-control input-sm" id="region-state">
                                                <option value=""> --- Please Select --- </option>
                                                <option value="3513">Aberdeen</option>
                                                <option value="3514">Aberdeenshire</option>
                                                <option value="3515">Anglesey</option>
                                            </select>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="col-md-12">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox"> I wish to subscribe to the OXY newsletter.
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" checked="checked"> My delivery and billing
                                                addresses are the same.
                                            </label>
                                        </div>
                                        <button class="btn btn-primary  pull-right" type="submit" data-toggle="collapse"
                                            data-parent="#checkout-page" data-target="#shipping-address-content"
                                            id="button-payment-address">Continue</button>
                                        <div class="checkbox pull-right">
                                            <label>
                                                <input type="checkbox"> I have read and agree to the <a
                                                    title="Privacy Policy" href="javascript:;">Privacy Policy</a>
                                                &nbsp;&nbsp;&nbsp;
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <!-- END PAYMENT ADDRESS -->

                        <!-- BEGIN SHIPPING ADDRESS -->
                        <div id="shipping-address" class="panel panel-default">
                            <div class="panel-heading">
                                <h2 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#checkout-page"
                                        href="#shipping-address-content" class="accordion-toggle">
                                        Step 3: Delivery Details
                                    </a>
                                </h2>
                            </div>
                            <div id="shipping-address-content" class="panel-collapse collapse">
                                <div class="panel-body row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="firstname-dd">First Name <span class="require">*</span></label>
                                            <input type="text" id="firstname-dd" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="lastname-dd">Last Name <span class="require">*</span></label>
                                            <input type="text" id="lastname-dd" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="email-dd">E-Mail <span class="require">*</span></label>
                                            <input type="text" id="email-dd" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="telephone-dd">Telephone <span class="require">*</span></label>
                                            <input type="text" id="telephone-dd" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="fax-dd">Fax</label>
                                            <input type="text" id="fax-dd" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="company-dd">Company</label>
                                            <input type="text" id="company-dd" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="address1-dd">Address 1</label>
                                            <input type="text" id="address1-dd" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="address2-dd">Address 2</label>
                                            <input type="text" id="address2-dd" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="city-dd">City <span class="require">*</span></label>
                                            <input type="text" id="city-dd" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="post-code-dd">Post Code <span class="require">*</span></label>
                                            <input type="text" id="post-code-dd" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="country-dd">Country <span class="require">*</span></label>
                                            <select class="form-control input-sm" id="country-dd">
                                                <option value=""> --- Please Select --- </option>
                                                <option value="244">Aaland Islands</option>
                                                <option value="1">Afghanistan</option>
                                                <option value="2">Albania</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="region-state-dd">Region/State <span
                                                    class="require">*</span></label>
                                            <select class="form-control input-sm" id="region-state-dd">
                                                <option value=""> --- Please Select --- </option>
                                                <option value="3513">Aberdeen</option>
                                                <option value="3514">Aberdeenshire</option>
                                                <option value="3515">Anglesey</option>
                                                <option value="3516">Angus</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button class="btn btn-primary  pull-right" type="submit"
                                            id="button-shipping-address" data-toggle="collapse"
                                            data-parent="#checkout-page"
                                            data-target="#shipping-method-content">Continue</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END SHIPPING ADDRESS -->

                        <!-- BEGIN SHIPPING METHOD -->
                        {{-- <div id="shipping-method" class="panel panel-default">
                            <div class="panel-heading">
                                <h2 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#checkout-page"
                                        href="#shipping-method-content" class="accordion-toggle">
                                        Step 4: Delivery Method
                                    </a>
                                </h2>
                            </div>
                            <div id="shipping-method-content" class="panel-collapse collapse">
                                <div class="panel-body row">
                                    <div class="col-md-12">
                                        <p>Please select the preferred shipping method to use on this order.</p>
                                        <h4>Flat Rate</h4>
                                        <div class="radio-list">
                                            <label>
                                                <input type="radio" name="FlatShippingRate" value="FlatShippingRate">
                                                Flat Shipping Rate
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label for="delivery-comments">Add Comments About Your Order</label>
                                            <textarea id="delivery-comments" rows="8" class="form-control"></textarea>
                                        </div>
                                        <button class="btn btn-primary  pull-right" type="submit"
                                            id="button-shipping-method" data-toggle="collapse"
                                            data-parent="#checkout-page"
                                            data-target="#payment-method-content">Continue</button>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <!-- END SHIPPING METHOD -->

                        <!-- BEGIN PAYMENT METHOD -->
                        {{-- <div id="payment-method" class="panel panel-default">
                            <div class="panel-heading">
                                <h2 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#checkout-page" href="#payment-method-content"
                                        class="accordion-toggle">
                                        Step 5: Payment Method
                                    </a>
                                </h2>
                            </div>
                            <div id="payment-method-content" class="panel-collapse collapse">
                                <div class="panel-body row">
                                    <div class="col-md-12">
                                        <p>Please select the preferred payment method to use on this order.</p>
                                        <div class="radio-list">
                                            <label>
                                                <input type="radio" name="CashOnDelivery" value="CashOnDelivery">
                                                Cash On Delivery
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label for="delivery-payment-method">Add Comments About Your Order</label>
                                            <textarea id="delivery-payment-method" rows="8" class="form-control"></textarea>
                                        </div>
                                        <button class="btn btn-primary  pull-right" type="submit"
                                            id="button-payment-method" data-toggle="collapse"
                                            data-parent="#checkout-page" data-target="#confirm-content">Continue</button>
                                        <div class="checkbox pull-right">
                                            <label>
                                                <input type="checkbox"> I have read and agree to the <a
                                                    title="Terms & Conditions" href="javascript:;">Terms & Conditions
                                                </a> &nbsp;&nbsp;&nbsp;
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <!-- END PAYMENT METHOD -->

                        <!-- BEGIN CONFIRM -->
                        <div id="confirm" class="panel panel-default">
                            <div class="panel-heading">
                                <h2 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#checkout-page" href="#confirm-content"
                                        class="accordion-toggle">
                                        Step 6: Confirm Order
                                    </a>
                                </h2>
                            </div>
                            <div id="confirm-content" class="panel-collapse collapse">
                                <div class="panel-body row">
                                    <div class="col-md-12 clearfix">
                                        <div class="table-wrapper-responsive">
                                            <table>
                                                <tr>
                                                    <th class="checkout-image">Image</th>
                                                    <th class="checkout-description">Description</th>
                                                    <th class="checkout-model">Model</th>
                                                    <th class="checkout-quantity">Quantity</th>
                                                    <th class="checkout-price">Price</th>
                                                    <th class="checkout-total">Total</th>
                                                </tr>
                                                @foreach ($products as $product)
                                                    <tr>
                                                        <td class="checkout-image">
                                                            <a href="javascript:;"><img
                                                                    src="/products/{{ $product->image }}"
                                                                    alt="Berry Lace Dress"></a>
                                                        </td>
                                                        <td class="checkout-description">
                                                            <h3><a href="javascript:;">{{ $product->name }}</a>
                                                            </h3>
                                                            
                                                        </td>
                                                        <td class="checkout-model">RES.193</td>
                                                        <td class="checkout-quantity">{{ $product->quantity }}</td>
                                                        <td class="checkout-price"><strong><span>$</span>{{ $product->price }}</strong>
                                                        </td>
                                                        <td class="checkout-total"><strong><span>$</span>{{ $product->price }}</strong>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                
                                            </table>
                                        </div>
                                        <div class="checkout-total-block">
                                            <ul>
                                                {{-- <li>
                                                    <em>Sub total</em>
                                                    <strong class="price"><span>$</span>{{ $total }}</strong>
                                                </li> --}}
                                                {{-- <li>
                                                    <em>Shipping cost</em>
                                                    <strong class="price"><span>$</span>3.00</strong>
                                                </li>
                                                <li>
                                                    <em>Eco Tax (-2.00)</em>
                                                    <strong class="price"><span>$</span>3.00</strong>
                                                </li>
                                                <li>
                                                    <em>VAT (17.5%)</em>
                                                    <strong class="price"><span>$</span>3.00</strong>
                                                </li> --}}
                                                <li class="checkout-total-price">
                                                    <em>Total</em>
                                                    <strong class="price"><span>$</span>{{ $total }}</strong>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="clearfix"></div>
                                        <button class="btn btn-primary pull-right" type="submit"
                                            id="button-confirm">Proceed to pay</button>
                                        <button type="button"
                                            class="btn btn-default pull-right margin-right-20">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END CONFIRM -->
                    </div>
                    <!-- END CHECKOUT PAGE -->
                </div>
                <!-- END CONTENT -->
            </div>
            <!-- END SIDEBAR & CONTENT -->
        </div>
    </div>

@endsection


</body>
<!-- END BODY -->

</html>


{{-- <head>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/css/bootstrap.min.css'>
</head>
<div class="container">
    <div class="row mt-4">
        <div class="col-md-8">
            <form method="POST" action="/orderplaced">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Contact Information</label>
                    <input type="text" name="email" placeholder="Enter Email">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <input type="hidden" name="price" value="{{$products->pluck('price')->sum()}}">
                </div>
                <div class="mb-3">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="">Shipping Details</label>
                            </div>
                            <div class="mb-2">
                                <label for="exampleInputfname1" class="form-label">First Name</label>
                                <input type="text" name="fname" placeholder="First Name"
                                    value="{{ old('firstname') }}">
                                @if ($errors->has('firstname'))
                                    <span class="text-danger">{{ $errors->first('firstname') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mt-3">
                                <label for="exampleInputlname" class="form-label mt-4">Last Name</label>
                                <input type="text" name="lname" placeholder="Last Name"
                                    value="{{ old('lastname') }}">
                                {{ $errors->first('lastname') }}
                            </div>
                            <div class="mt-3">
                                <label for="exampleInputcontact" class="form-label mt-4">Contact</label>
                                <input type="number" name="contact" placeholder="Contact"
                                    value="{{ old('contact') }}">
                                {{ $errors->first('contact') }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="company">Company</label>
                    <input type="text" name="company" placeholder="Company(Optional)">
                </div>
                <div class="mb-3">
                    <label for="address">Address</label>
                    <input type="text" name="address" placeholder="Address" value="{{ old('address') }}">
                    {{ $errors->first('address') }}
                </div>
                <div class="mb-3">
                    <label for="appartment">Appartment</label>
                    <input type="text" name="appartment" placeholder="Apartment,suit,etc(Optional)">
                </div>
                <div class="mb-3">
                    <label for="city">City</label>
                    <input type="text" name="city" placeholder="City" value="{{ old('city') }}">
                    {{ $errors->first('city') }}
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="Country">Country</label>
                        <select name="Country" value="{{ old('country') }}">
                            {{ $errors->first('country') }}
                            <option value="" selected="selected">Select Country</option>
                            <option value="Afghanistan">Afghanistan</option>
                            <option value="Albania">Albania</option>
                            <option value="Algeria">Algeria</option>
                            <option value="American Samoa">American Samoa</option>
                            <option value="Andorra">Andorra</option>
                            <option value="Angola">Angola</option>
                            <option value="Anguilla">Anguilla</option>
                            <option value="Antarctica">Antarctica</option>
                            <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                            <option value="Argentina">Argentina</option>
                            <option value="Armenia">Armenia</option>
                            <option value="Aruba">Aruba</option>
                            <option value="Australia">Australia</option>
                            <option value="Austria">Austria</option>
                            <option value="Azerbaijan">Azerbaijan</option>
                            <option value="Bahamas">Bahamas</option>
                            <option value="Bahrain">Bahrain</option>
                            <option value="Bangladesh">Bangladesh</option>
                            <option value="Barbados">Barbados</option>
                            <option value="Belarus">Belarus</option>
                            <option value="Belgium">Belgium</option>
                            <option value="Belize">Belize</option>
                            <option value="Benin">Benin</option>
                            <option value="Bermuda">Bermuda</option>
                            <option value="Bhutan">Bhutan</option>
                            <option value="Bolivia">Bolivia</option>
                            <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                            <option value="Botswana">Botswana</option>
                            <option value="Bouvet Island">Bouvet Island</option>
                            <option value="Brazil">Brazil</option>
                            <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                            <option value="Brunei Darussalam">Brunei Darussalam</option>
                            <option value="Bulgaria">Bulgaria</option>
                            <option value="Burkina Faso">Burkina Faso</option>
                            <option value="Burundi">Burundi</option>
                            <option value="Cambodia">Cambodia</option>
                            <option value="Cameroon">Cameroon</option>
                            <option value="Canada">Canada</option>
                            <option value="Cape Verde">Cape Verde</option>
                            <option value="Cayman Islands">Cayman Islands</option>
                            <option value="Central African Republic">Central African Republic</option>
                            <option value="Chad">Chad</option>
                            <option value="Chile">Chile</option>
                            <option value="China">China</option>
                            <option value="Christmas Island">Christmas Island</option>
                            <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                            <option value="Colombia">Colombia</option>
                            <option value="Comoros">Comoros</option>
                            <option value="Congo">Congo</option>
                            <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The
                            </option>
                            <option value="Cook Islands">Cook Islands</option>
                            <option value="Costa Rica">Costa Rica</option>
                            <option value="Cote D'ivoire">Cote D'ivoire</option>
                            <option value="Croatia">Croatia</option>
                            <option value="Cuba">Cuba</option>
                            <option value="Cyprus">Cyprus</option>
                            <option value="Czech Republic">Czech Republic</option>
                            <option value="Denmark">Denmark</option>
                            <option value="Djibouti">Djibouti</option>
                            <option value="Dominica">Dominica</option>
                            <option value="Dominican Republic">Dominican Republic</option>
                            <option value="Ecuador">Ecuador</option>
                            <option value="Egypt">Egypt</option>
                            <option value="El Salvador">El Salvador</option>
                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                            <option value="Eritrea">Eritrea</option>
                            <option value="Estonia">Estonia</option>
                            <option value="Ethiopia">Ethiopia</option>
                            <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                            <option value="Faroe Islands">Faroe Islands</option>
                            <option value="Fiji">Fiji</option>
                            <option value="Finland">Finland</option>
                            <option value="France">France</option>
                            <option value="French Guiana">French Guiana</option>
                            <option value="French Polynesia">French Polynesia</option>
                            <option value="French Southern Territories">French Southern Territories</option>
                            <option value="Gabon">Gabon</option>
                            <option value="Gambia">Gambia</option>
                            <option value="Georgia">Georgia</option>
                            <option value="Germany">Germany</option>
                            <option value="Ghana">Ghana</option>
                            <option value="Gibraltar">Gibraltar</option>
                            <option value="Greece">Greece</option>
                            <option value="Greenland">Greenland</option>
                            <option value="Grenada">Grenada</option>
                            <option value="Guadeloupe">Guadeloupe</option>
                            <option value="Guam">Guam</option>
                            <option value="Guatemala">Guatemala</option>
                            <option value="Guinea">Guinea</option>
                            <option value="Guinea-bissau">Guinea-bissau</option>
                            <option value="Guyana">Guyana</option>
                            <option value="Haiti">Haiti</option>
                            <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands
                            </option>
                            <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                            <option value="Honduras">Honduras</option>
                            <option value="Hong Kong">Hong Kong</option>
                            <option value="Hungary">Hungary</option>
                            <option value="Iceland">Iceland</option>
                            <option value="India">India</option>
                            <option value="Indonesia">Indonesia</option>
                            <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                            <option value="Iraq">Iraq</option>
                            <option value="Ireland">Ireland</option>
                            <option value="Israel">Israel</option>
                            <option value="Italy">Italy</option>
                            <option value="Jamaica">Jamaica</option>
                            <option value="Japan">Japan</option>
                            <option value="Jordan">Jordan</option>
                            <option value="Kazakhstan">Kazakhstan</option>
                            <option value="Kenya">Kenya</option>
                            <option value="Kiribati">Kiribati</option>
                            <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic
                                of
                            </option>
                            <option value="Korea, Republic of">Korea, Republic of</option>
                            <option value="Kuwait">Kuwait</option>
                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                            <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                            <option value="Latvia">Latvia</option>
                            <option value="Lebanon">Lebanon</option>
                            <option value="Lesotho">Lesotho</option>
                            <option value="Liberia">Liberia</option>
                            <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                            <option value="Liechtenstein">Liechtenstein</option>
                            <option value="Lithuania">Lithuania</option>
                            <option value="Luxembourg">Luxembourg</option>
                            <option value="Macao">Macao</option>
                            <option value="North Macedonia">North Macedonia</option>
                            <option value="Madagascar">Madagascar</option>
                            <option value="Malawi">Malawi</option>
                            <option value="Malaysia">Malaysia</option>
                            <option value="Maldives">Maldives</option>
                            <option value="Mali">Mali</option>
                            <option value="Malta">Malta</option>
                            <option value="Marshall Islands">Marshall Islands</option>
                            <option value="Martinique">Martinique</option>
                            <option value="Mauritania">Mauritania</option>
                            <option value="Mauritius">Mauritius</option>
                            <option value="Mayotte">Mayotte</option>
                            <option value="Mexico">Mexico</option>
                            <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                            <option value="Moldova, Republic of">Moldova, Republic of</option>
                            <option value="Monaco">Monaco</option>
                            <option value="Mongolia">Mongolia</option>
                            <option value="Montserrat">Montserrat</option>
                            <option value="Morocco">Morocco</option>
                            <option value="Mozambique">Mozambique</option>
                            <option value="Myanmar">Myanmar</option>
                            <option value="Namibia">Namibia</option>
                            <option value="Nauru">Nauru</option>
                            <option value="Nepal">Nepal</option>
                            <option value="Netherlands">Netherlands</option>
                            <option value="Netherlands Antilles">Netherlands Antilles</option>
                            <option value="New Caledonia">New Caledonia</option>
                            <option value="New Zealand">New Zealand</option>
                            <option value="Nicaragua">Nicaragua</option>
                            <option value="Niger">Niger</option>
                            <option value="Nigeria">Nigeria</option>
                            <option value="Niue">Niue</option>
                            <option value="Norfolk Island">Norfolk Island</option>
                            <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                            <option value="Norway">Norway</option>
                            <option value="Oman">Oman</option>
                            <option value="Pakistan">Pakistan</option>
                        </select>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="postalcode">Postal Code</label>
                        <input type="number" name="postalcode" placeholder="Postal Code">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="appartment">Appartment(Optional)
                    </label>
                    <input type="text" name="appartment" class="form-control" id="exampleInputappartment1"
                        aria-describedby="appartmentHelp" placeholder="Apartment,suit,etc(Optional)">
                </div>
                <div class="mt-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div class="col-md-4">
            <div class="card shadow-0 border rounded-3">
                <div class="card-body">
                    @foreach ($products as $product)
                        <div class="row">
                            <div class="col-md-4">
                                <div class="bg-image hover-zoom ripple rounded ripple-surface">
                                    <img src="/products/{{ $product->image }}" class="w-100">
                                    <a href="#!">
                                        <div class="hover-overlay">
                                            <div class="mask" style="background-color: rgba(253, 253, 253, 0.15);">
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-3 col-xl-3 border-sm-start-none border-start">
                                <div class="d-flex flex-row align-items-center mb-1">
                                    <h5 class="mb-1 me-1">${{ $product->price }}</h5>
                                </div>
                                <h6 class="mb-1 me-1" style="width: 100px">Total
                                    :${{ $product->price * $product->quantity }}</h6>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div> --}}
