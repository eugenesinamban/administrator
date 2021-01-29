@extends('admin.layouts.app')
@section('content')
    <div class="card">
        <div class="card-header h2">{{ $product->text }}</div>
        <div class="card-body">
            <div class="mb-4">
                <p>Product Image : </p>
                <img src="{{ $product->image_url }}" class="image">
                <hr>
            </div>
            <div class="mb-4">
                <p>Product Description : </p>
                <p>{{ $product->description}}</p>
                <hr>
            </div>
            <p>Number of likes : {{ $product->likes }}</p>
        </div>
    </div>
@endsection