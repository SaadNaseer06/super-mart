@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="">
            <a href="/products/category" class="btn btn-primary mt-3" style="display: flex; float: right;">New Category</a>
        </div>
        <table class="table table-hover-mt-3">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <th scope="row">{{ $loop->index + 1 }}</th>
                        <td>{{ $category->name }}</td>
                        <td>
                            <a href="category/{{ $category->id }}/delete" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
