@extends('public.layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col-8">
                @foreach ($products as $product)
                    @include('public.include.card', $product)
                @endforeach
            </div>
            <div class="col"></div>
        </div>
    </div>
@endsection