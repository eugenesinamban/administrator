@extends('portfolio.layouts.app')
@section('content')
    <div class="container pb-4 pt-4 items">
        @foreach ($portfolio as $content)
        <div class="mb-4 mt-4 item">
            <h3>{{ $content['title'] }}</h3>
            <a href="/{{ $content['slug'] }}">
                <img src="{{ $content['image'] }}" class="img-thumbnail">
            </a>
        </div>
        <portfolio-item :item="{{ json_encode($content) }}"></portfolio-item>
        @endforeach
    </div>
@endsection