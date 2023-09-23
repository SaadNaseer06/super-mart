@extends('layouts.app')
@section('content')
    @if ($message = Session::get('success'))
        <div class='alert alert-success alert-block'>
            <strong>{{ $message }}</strong>
        </div>
    @endif
    <div class="container">
        <div class="text-right">
            <h1>Products</h1>
            <a href="http:/products/create" class="btn btn-dark mt-2" style="display:flex; float:right;">New Product</a>
        </div>
        <table class="table table-hover mt-3">
            <thead>
                <tr>
                    <th>S.No</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $loop->index + 1 }}</td>
                        <td><a href="/products/{{ $product->id }}/edit">{{ $product->name }}</a></td>
                        <td>
                            <img src="/products/{{ $product->image }}" class="rounded-circle" width="50" height="50">
                        </td>
                        <td>
                            <a href="products/{{ $product->id }}/edit" class="btn btn-dark btn-sm">Edit</a>
                            <a href="products/{{ $product->id }}/delete" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
