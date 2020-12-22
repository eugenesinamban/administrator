@extends('public.layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 offset-lg-2">
                @foreach ($products as $product)
                    @include('public.include.card', $product)
                @endforeach
            </div>
        </div>
    </div>
@endsection