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
        <tr>
            <td><a href="#">Edit</a></td>
            <td>1</td>
            <td>Ichiran</td>
            <td>32</td>
        </tr>
        <tr>
            <td><a href="#">Edit</a></td>
            <td>2</td>
            <td>Ippuudo</td>
            <td>30</td>
        </tr>
        
    </table>
</div>
@endsection