@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-body">
        <a href="{{ action('ProductController@create', $type) }}">Add</a>
        <br>
        {{ ucfirst($type->text) }} list
        <table border="1">
            <tr>
                <th>Edit</th>
                <th>ID</th>
                <th>Text</th>
            </tr>
            @forelse ($products as $product)
            <tr>
                <td><a href={{ route('edit', [$type, $product->slug]) }}>Edit</a></td>
                <td>{{ $product->id }}</td>
                <td><a href="{{ route('show', [$type, $product->slug]) }}">{{ $product->text}}</a></td>
            </tr>
            @empty
            <tr>
                <td colspan="4">NO DATA AVAILABLE</td>    
            </tr>            
            @endforelse
        </table>
    </div>
    </div>
@endsection