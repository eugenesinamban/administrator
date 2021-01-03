@extends('public.layouts.app')
@section('content')
    @foreach ($products as $product)
        <h1>#{{ $loop->index + 1}}</h1>
        @include('public.include.card', $product)
    @endforeach
@endsection