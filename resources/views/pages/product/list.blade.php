@extends('layouts.app')
@section('content')
<div>
    <a href="{{ action('ProductController@create', $product) }}">Add</a>
    <br>

    {{-- list  --}}
    Object list
    <table border="1">
        <tr>
            <th>Edit</th>
            <th>ID</th>
            <th>Text</th>
            <th>Branches</th>
        </tr>
        @forelse ($products as $product)
        <tr>
            <td><a href="#">Edit</a></td>
            <td>{{ $product->id }}</td>
            <td>{{ $product->text}}</td>
        </tr>
        @empty
        <tr>
            <td colspan="4">NO DATA AVAILABLE</td>    
        </tr>            
        @endforelse
        @foreach ($products as $product)
            
        @endforeach
    </table>
</div>
@endsection