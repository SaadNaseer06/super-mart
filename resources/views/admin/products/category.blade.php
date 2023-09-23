@extends('layouts.app')
@section('content')
    <form method="POST" action="{{ route('category.post') }}">
        @csrf
        <div class="col-md-6 form-group mt-4">
            <label for="name">Enter Name</label>
            <input type="text" name="name" class="form-control" placeholder="Enter Category Name">
        </div>
        <button type="submit" class="btn btn-primary mt-4">Submit</button>
    </form>
@endsection
