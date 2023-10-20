@extends('layouts.admin.app')
@section('content')
    @if ($message = Session::get('success'))
        <div class='alert alert-success alert-block'>
            <strong>{{ $message }}</strong>
        </div>
    @endif
    <div class="container">
        <div class="text-right">
            <h1>Orders</h1>
            <a href="/orders" class="btn btn-dark mt-2" style="display:flex; float:right;">Orders</a>
        </div>
        <table class="table table-hover mt-3">
            <thead>
                <tr>
                    <th>S.No</th>
                    <th>Customer Name</th>
                    <th>Customer Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>City / Country</th>
                    {{-- <th>Price</th>  --}}
                    <th>Status</th> 
                    <th>Action</th>
                </tr>
            <tbody>
                @foreach ($orders as $order)
                    <tr>
                        <td>{{ $loop->index + 1 }}</td>
                        <td>{{ $order->user->name }}</td>
                        <td>{{ $order->user->email }}</td>
                        <td>{{ $order->contact }}</td>
                        <td>{{ $order->address }}</td>
                        <td>{{ $order->city . ' / ' . $order->country }}</td>
                        {{-- <td>{{ $order->price }}</td> --}}
                        @if ($order->status == 'delivered')
                        <td><p class="badge bg-success">{{ ucwords($order->status) }}</p></td>
                        @elseif($order->status=='cancel')
                        <td><p class="badge bg-danger">{{ ucwords($order->status) }}</p></td>
                        @elseif($order->status=='shipped')
                        <td><p class="badge bg-secondary">{{ ucwords($order->status) }}</p></td>
                        @elseif($order->status=='returned')
                        <td><p class="badge bg-warning">{{ ucwords($order->status) }}</p></td>
                        @elseif($order->status=='pending')
                        <td><p class="badge bg-dark">{{ ucwords($order->status) }}</p></td>
                        @endif
                        <td>
                            <a href="/orders/view/{{ $order->id }}" class="btn btn-info btn-sm">View</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection