@extends('layouts.app')
@section('content')
<div>
    <a href="{{ action('ProductController@create', $slug) }}">Add</a>
    <br>
    {{ ucfirst($slug) }} list
    <table border="1">
        <tr>
            <th>Edit</th>
            <th>ID</th>
            <th>Text</th>
        </tr>
        @forelse ($products as $product)
        <tr>
        <td><a href={{ route('edit', [$slug, $product->id]) }}>Edit</a></td>
            <td>{{ $product->id }}</td>
            <td>{{ $product->text}}</td>
        </tr>
        @empty
        <tr>
            <td colspan="4">NO DATA AVAILABLE</td>    
        </tr>            
        @endforelse
    </table>
</div>
@endsection