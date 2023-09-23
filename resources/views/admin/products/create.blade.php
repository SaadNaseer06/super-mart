@extends('layouts.app')
@section('content')
    @if ($message = Session::get('success'))
        <div class='alert alert-success alert-block'>
            <strong>{{ $message }}</strong>
        </div>
    @endif
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <h1>Add Product</h1>
                <div class="card mt-3 p-3">
                    <form method="POST" action="/products/store" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control">
                            @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea name="description" class="form-control" rows="4"></textarea>
                            @if ($errors->has('description'))
                                <span class="text-danger">{{ $errors->first('description') }}</span>
                            @endif
                            <label for="price" class="mt-5">Enter Price</label>
                            <input class="d-flex" type="number" placeholder="Price" name="price">
                        </div>
                        <div class="form-group">
                            <label for="category">Choose a Category</label>
                            <select name="category_id" id="category">
                                <option>select category</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" name="image" class="form-control">
                            @if ($errors->has('image'))
                                <span class="text-danger">{{ $errors->first('image') }}</span>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-dark">
                            Submit
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
