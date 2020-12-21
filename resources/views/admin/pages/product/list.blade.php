@extends('admin.layouts.app')
@section('content')
<div class="card">
    <div class="card-body">
        <a href="{{ action('ProductController@create', $type) }}">Add</a>
        <br>
        {{ ucfirst($type->text) }} list
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
                    <td><a href="{{ route('show', [$type, $product->slug]) }}">{{ $product->text}}</a></td>
                    <td><a href={{ route('edit', [$type, $product->slug]) }}>Edit</a></td>
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