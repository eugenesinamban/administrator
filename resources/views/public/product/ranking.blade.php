@extends('public.layouts.app')
@section('content')
    <cards :type="{{ $type }}" :products="{{ $products }}"></cards>
@endsection