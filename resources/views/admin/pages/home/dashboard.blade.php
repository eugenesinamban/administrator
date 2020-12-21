@extends('admin.layouts.app')
@section('content')
<div>
    @forelse ($types as $type)
        <a href="{{ route('list', [$type->text]) }}">{{ ucfirst($type->text) }}</a>
    @empty
        No Data Available
    @endforelse
</div>
@endsection
