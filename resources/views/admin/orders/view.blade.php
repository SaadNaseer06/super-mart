@extends('layouts.admin.app')
@section('content')
    {{-- @dd($order->products[0]); --}}
    @if ($message = Session::get('success'))
        <div class='alert alert-success alert-block'>
            <strong>{{ $message }}</strong>
        </div>
    @endif
    <div class="main">
        <h3>Order Details</h3>
        <div class="row my-4">
            <div class="col-md-3">
                <div>
                    <h5>First Name</h5>
                    <p>{{ $order->firstname }}</p>
                </div>
                <div>
                    <h5>Last Name</h5>
                    <p>{{ $order->lastname }}</p>
                </div>
                <div>
                    <h5>E-Mail</h5>
                    <p>{{ $order->email }}</p>
                </div>
                <div>
                    <h5>Telephone</h5>
                    <p>{{ $order->contact }}</p>
                </div>
                <div>
                    <h5>Fax</h5>
                    <p>{{ $order->fax }}</p>
                </div>
                <div>
                    <h5>Company</h5>
                    <p>{{ $order->company }}</p>
                </div>
            </div>
            <div class="col-md-3">
                <div>
                    <h5>Address</h5>
                    <p>{{ $order->address }} </p>
                </div>
                <div>
                    <h5>Postal Code</h5>
                    <p>{{ $order->postalcode }}</p>
                </div>
                <div>
                    <h5>City</h5>
                    <p>{{ $order->city }}</p>
                </div>
                <div>
                    <p>Country</p>
                    <p>{{ $order->country }}</p>
                </div>
                <div>
                    <h5>State/Region</h5>
                    <p>{{ $order->state }}</p>
                </div>
            </div>
            <div class="col-md-6">
                {{-- <h1>Product Details</h1> --}}
                <div class="div" style="width:calc(100% - 180px); margin-top:10px;">
                    <table>
                        <tbody>
                            <tr>
                                <th class="fw-bold col-w-100">Image</th>
                                <th class="fw-bold col-w-100">Name</th>
                                <th class="fw-bold col-w-100">Quantity</th>
                                <th class="fw-bold col-w-100">Price</th>
                            </tr>
                            @foreach ($order->products as $item)
                                <tr>
                                    <th class="fw-bold"><img src="{{ asset('products/' . $item->product->image) }}" style="height: 65px">
                                    </th>
                                    <th class="fw-bold">{{ $item->product->name }}</th>
                                    <th class="fw-bold">{{ $item->quantity }}</th>
                                    <th class="fw-bold">{{ $item->product->price }}</th>
                                </tr>
                            @endforeach
                            <th>
                                <label for="status">Choose a Status:</label>
                                <form action="{{ route('status', ['order' => $order->id]) }}" method="POST">
                                    @csrf
                                    <select name="status" id="status">

                                        <option {{ $order->status == 'pending' ? 'selected' : null }} value="pending">
                                            Pending</option>
                                        <option {{ $order->status == 'delivered' ? 'selected' : null }} value="delivered">
                                            Delivered</option>
                                        <option {{ $order->status == 'shipped' ? 'selected' : null }} value="shipped">
                                            Shipped</option>
                                        <option {{ $order->status == 'cancel' ? 'selected' : null }} value="cancel">Cancel
                                        </option>
                                        <option {{ $order->status == 'returned' ? 'selected' : null }} value="returned">
                                            Returned</option>
                                    </select>
                                    <button class="btn btn-dark btn-sm mt-3" type="submit"
                                        style="width: 90px">Save</button>
                                </form>
                            </th>
                        </tbody>
                    </table>
                    <div class="mt-1">
                        <span class="fw-bold">Total: </span>
                        <span>{{ $total }}</span>
                    </div>
                    <div class="mt-1">
                        <span class="fw-bold">Payment Id: </span>
                        <span>{{ $paymentId }}</span>
                    </div>
                    <div>
                        <a href="{{ route('invoice', ['order' => $order->id]) }}" class="btn btn-dark btn-sm mt-2">Print Invoice</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
