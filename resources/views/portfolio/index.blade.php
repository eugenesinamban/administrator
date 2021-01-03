@extends('portfolio.layouts.app')
@section('content')
    <div class="container">
        @foreach ($contents['portfolio'] as $content)
            <h3>{{ $content['title'] }}</h3>
            <a href="{{ $content['link'] }}">Link</a>
            <img src="{{ $content['image'] }}" class="img-thumbnail">
        @endforeach
    </div>
@endsection