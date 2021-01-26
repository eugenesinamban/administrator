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
            <like-bar 
                :likes="{{ json_encode($product->likes) }}"
                :route="{{ json_encode(route('external.like', [$type, $product]))}}"
                :product="{{ collect($product)->toJson() }}"
            />
        </div>
    </div>
@endsection