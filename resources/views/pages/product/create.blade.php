@extends('layouts.app')
@section('content')
    <div>
        <form action="{{ action('ProductController@store', $slug) }}" method="post">
            @csrf
            @include('include.product-form')
        </form>
    </div>
@endsection