@extends('admin.layouts.app')
@section('content')
<div class="row">
    <div class="col"></div>
    <div class="col-8">
        <div class="card">
            <div class="card-header">
                User Details
            </div>
            <div class="card-body">
                <form action="{{ route('user-update', [$user]) }}" method="post">
                    @csrf
                    @include('admin.include.user-form', [$user])
                </form>
            </div>
        </div>
    </div>
    <div class="col"></div>
</div>
@endsection