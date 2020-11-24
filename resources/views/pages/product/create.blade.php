@extends('layouts.app')
@section('content')
    <div>
        <form action="{{ action('ProductController@store', $product) }}" method="post">
            @csrf
            <input type="text" name="text" placeholder="Enter {{ ucfirst($product) }} Shop Name">
            @error('text')
                <span role="alert">
                    <strong style="color: red;">{{ $message }}</strong>
                </span>
            @enderror
            <input type="submit" value="Save">
        </form>
    </div>
@endsection