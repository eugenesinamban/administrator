<div>
    <input type="text" name="text" placeholder="Enter {{ ucfirst($slug) }} Shop Name" value="{{ $product->text ?? old('text')}}">
</div>
@error('text')
    <span role="alert">
        <strong style="color: red;">{{ $message }}</strong>
    </span>
@enderror
<div>
    <input type="submit" value="Save">
</div>