<head>
    <title>Products</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<nav class="navbar navbar-expand-sm bg-dark">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link text-light" href="/products/create">Products</a>
        </li>
    </ul>
</nav>
@if($message=Session::get('success'))
<div class='alert alert-success alert-block'>
    <strong>{{ $message }}</strong>
</div>
@endif
<div class="container">
    <h1>Products</h1>
</div>
<div class="container">
    <div class="text-right">
        <a href="http:/products/create" class="btn btn-dark mt-2">New Product</a>
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
            @foreach($products as $product)
            <tr>
                <td>{{ $loop->index+1 }}</td>
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
