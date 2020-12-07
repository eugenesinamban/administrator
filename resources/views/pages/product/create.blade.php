@extends('layouts.app')
@section('content')
    <div>
        <form action="{{ action('ProductController@store', $type) }}" method="post">
            @csrf
            @include('include.product-form')
        </form>
    </div>
@endsection