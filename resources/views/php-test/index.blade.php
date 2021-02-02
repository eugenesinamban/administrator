@extends('php-test.app')
@section('content')
@include('php-test.include.message-form')
<div>
    @foreach ($messages as $message)
        {{ $message->title }} <br>
        {{ $message->name }} <br>
        {{ $message->mesage }} <br>
        <form action="{{ action('PhpTestController@delete', [$message])}}" method="POST">
        @csrf
        @method('delete')
        削除コード:
        <input type="password" name="password">
        <input type="submit" value="削除">
        @if (session($message->id))
        <span role="alert">
            <strong style="color: red;">{{ session($message->id) }}</strong>
        </span>
        @endif
        </form>
    @endforeach
</div>
@endsection