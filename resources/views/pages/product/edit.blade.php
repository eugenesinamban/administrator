@extends('layouts.app')
@section('content')
    <div>
        <form action="{{ action('ProductController@update', $slug) }}" method="post">
            @csrf
            @method('patch')
            @include('include.product-form')
        </form>
    </div>
@endsection