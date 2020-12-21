@extends('admin.layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">Create</div>
        <div class="card-body">
            <form action="{{ action('ProductController@store', $type) }}" method="post" enctype="multipart/form-data">
                @csrf
                @include('admin.include.product-form')
            </form>
        </div>
    </div>
@endsection