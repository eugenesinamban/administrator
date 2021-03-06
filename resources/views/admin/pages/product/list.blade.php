@extends('admin.layouts.app')
@section('content')
<div class="card">
    <div class="card-body">
        <div class="mb-4">
            <a href="{{ action('ProductController@create', $type) }}" class="btn btn-success">Add</a>
            <a href="{{ action('ProductController@createByFile', $type) }}" class="btn btn-success">Add by file</a>
        </div>
        <h2>{{ ucfirst($type->text) }} list</h2>
        @if (!$products->isEmpty())
        <small>*Products in red have incomplete data</small>
        @endif
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Text</th>
                    <th>Edit</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td><a href="{{ route('show', [$type, $product->slug]) }}"><span @if (Str::contains($product->image_url, 'no_image'))style="color: red;"@endif>{{ $product->text }}</span>
                    </a></td>
                    <td><a href={{ route('edit', [$type, $product->slug]) }} class="btn btn-success">Edit</a></td>
                </tr>
                @empty
                <tr>
                    <td colspan="3">NO DATA AVAILABLE</td>    
                </tr>            
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection