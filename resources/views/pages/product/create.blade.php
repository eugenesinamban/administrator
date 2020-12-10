@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ action('ProductController@store', $type) }}" method="post" enctype="multipart/form-data">
                @csrf
                @include('include.product-form')
            </form>
        </div>
    </div>
@endsection