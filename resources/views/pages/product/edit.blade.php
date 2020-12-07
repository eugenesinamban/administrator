@extends('layouts.app')
@section('content')
    <div>
        <form action="{{ action('ProductController@update', [$type, $product->slug]) }}" method="post">
            @csrf
            @method('patch')
            @include('include.product-form')
        </form>
        <form action="{{ action('ProductController@destroy', [$type, $product->slug])}}" method="post">
        @csrf
        @method('delete')
        <input type="submit" value="Delete">
        </form>
    </div>
@endsection