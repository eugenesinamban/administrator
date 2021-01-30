@extends('public.layouts.app')
@section('content')
    <h2 class="text-center mb-4">Top 3 ラーメン屋さん</h2>
    <cards :type="{{ $type }}" :products="{{ $products }}"></cards>
    <a href="/ranking" class="btn btn-danger btn-block">もっと見る</a>
@endsection