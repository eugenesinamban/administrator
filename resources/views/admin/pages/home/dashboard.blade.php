@extends('admin.layouts.app')
@section('content')
<div class="row">
    <div class="col"></div>
    <div class="col-6">
        @include('admin.include.product-list', [$types])
        @include('admin.include.admin-list', [$users])
    </div>
    <div class="col"></div>
</div>
@endsection
