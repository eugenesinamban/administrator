@extends('public.layouts.app')
@section('content')
    <div class="row">
        <div class="col"></div>
        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    {{$product->text}}
                </div>
                <div class="card-body">
                    <img src="{{ imageUrl($product->image_url) }}" class="image">
                    <p>{{$product->description}}</p>
                </div>
            </div>
        </div>
        <div class="col"></div>
    </div>
@endsection