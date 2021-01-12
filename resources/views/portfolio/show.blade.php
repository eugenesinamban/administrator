@extends('portfolio.layouts.app')
@section('content')
    <div class="container">
        <a href="{{goBack()}}" class="btn btn-light mb-3">Back</a>
        <div class="card">
            <div class="card-header">
                <h3>{{ $portfolio['title'] }}</h3>
            </div>
            <div class="card-body">
                <h5 class="mb-4">{{ $portfolio['details'][$lang ?? 'en']}}</h5>
                <a href="{{ $portfolio['link'] }}">
                    <img src="{{ $portfolio['image'] }}" class="img-thumbnail">
                </a>
            </div>
        </div>
    </div>
@endsection