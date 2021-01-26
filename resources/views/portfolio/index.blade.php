@extends('portfolio.layouts.app')
@section('content')
    <div class="pb-4 pt-4 items">
        @foreach ($portfolio as $content)
        <portfolio-item :item="{{ collect($content)->toJson() }}" lang="{{ $lang }}"></portfolio-item>
        @endforeach
    </div>
@endsection