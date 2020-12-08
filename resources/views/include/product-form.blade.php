<div>
    <input type="text" name="text" placeholder="Enter {{ ucfirst($type) }} Shop Name" value="{{ $product->text ?? old('text')}}">
</div>
@error('text')
    <span role="alert">
        <strong style="color: red;">{{ $message }}</strong>
    </span>
@enderror

<div>
    <input type="text" name="slug" placeholder="Enter Slug" value="{{ $product->slug ?? old('slug')}}">
</div>
@error('slug')
    <span role="alert">
        <strong style="color: red;">{{ $message }}</strong>
    </span>
@enderror

<div>
    <input type="text" name="description" placeholder="Enter Description" value="{{ $product->description ?? old('description')}} ">
</div>
@error('description')
    <span role="alert">
        <strong style="color: red;">{{ $message }}</strong>
    </span>
@enderror

<div>
    <input type="submit" value="Save">
</div>