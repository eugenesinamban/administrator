@extends('admin.layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">Create</div>
        <div class="card-body">
            <form action="{{ action('ProductController@storeByFile', $type) }}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label>File</label><br>
                    <input type="file" name="file" class="form-control-file">
                    @error('file')
                        <span role="alert">
                            <strong style="color: red;">{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div>
                    <input class="btn btn-success" type="submit" value="Save">
                </div>

            </form>
        </div>
    </div>
@endsection