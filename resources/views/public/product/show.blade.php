@extends('public.layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 offset-lg-2">
                <a href="{{ route('external.index', [$type]) }}" class="btn btn-light">戻る</a>
                <hr>
                <div class="card">
                    <div class="card-header">
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
            </div>
        </div>
    </div>
@endsection