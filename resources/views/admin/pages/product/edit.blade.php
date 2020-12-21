@extends('admin.layouts.app')
@section('content')
<div class="card">
    <div class="card-body">
        <div class="mb-3">
            <form action="{{ action('ProductController@update', [$type, $product->slug]) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('patch')
                @include('admin.include.product-form')
            </form>
        </div>

        <form action="{{ action('ProductController@destroy', [$type, $product->slug])}}" method="post">
        @csrf
        @method('delete')
            <input type="submit" value="Delete" class="btn btn-danger">
        </form>
    </div>
</div>
@endsection