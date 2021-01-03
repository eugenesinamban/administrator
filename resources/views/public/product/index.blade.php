@extends('public.layouts.app')
@section('content')
    <h2 class="text-center mb-4">Top 3 ラーメン屋さん</h2>
    @foreach ($products as $product)
        <h2>#{{ $loop->index + 1 }}</h2>
        @include('public.include.card', $product)
    @endforeach
    <a href="/ranking" class="btn btn-danger btn-block">もっと見る</a>
@endsection