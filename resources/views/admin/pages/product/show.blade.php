@extends('admin.layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">{{ $product->text }}</div>
        <div class="card-body">
            <p>{{ $product->description}}</p>
            <img src="{{ imageUrl($product->image_url) }}" class="image">
        </div>
    </div>
@endsection