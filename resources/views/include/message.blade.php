@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@error('product')
    <div class="alert alert-danger">
        {{ $message }}
    </div>
@enderror