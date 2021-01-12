@extends('public.layouts.app')
@section('content')
    <a href="{{goBack()}}" class="btn btn-light mb-3">戻る</a>
    <hr>
    <div class="card border-dark">
        <div class="card-header bg-danger text-light">
            {{$product->text}}
        </div>
        <div class="card-body">
            <img src="{{ imageUrl($product->image_url) }}" class="image mb-3">
            <p>{{$product->description}}</p>
            <p class="text-right text-danger">{{ session($product->slug) }}</p>
            <div class="row">
                <div class="col-6 text-left">
                    <p>Number of likes : {{ $product->likes }}</p>
                </div>
                <div class="col-6 text-right">
                    @include('public.include.like', $product)
                </div>
            </div>
        </div>
    </div>
@endsection