@extends('admin.layouts.app')
@section('content')
<div class="row">
    <div class="col"></div>
    <div class="col-6">
        @include('admin.include.product-list', [$types])
        @hasanyrole('admin|Super Admin')
            @include('admin.include.admin-list', [$users])
        @endhasanyrole
    </div>
    <div class="col"></div>
</div>
@endsection
