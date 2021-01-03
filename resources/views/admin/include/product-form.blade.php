<div class="form-group">
    <label>Product Name</label>
    <input type="text" name="text" class="form-control" placeholder="Enter {{ ucfirst($type) }} Product Name" value="{{ $product->text ?? old('text')}}">
    @error('text')
        <span role="alert">
            <strong style="color: red;">{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="form-group">
    <label>Slug</label>
    <input type="text" name="slug" class="form-control" placeholder="Enter Slug" value="{{ $product->slug ?? old('slug')}}">
    @error('slug')
        <span role="alert">
            <strong style="color: red;">{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="form-group">
    <label>Description</label>
    <input type="text" name="description" class="form-control" placeholder="Enter Description" value="{{ $product->description ?? old('description')}}">
    @error('description')
        <span role="alert">
            <strong style="color: red;">{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="form-group">
    <label>Likes</label>
    <input type="number" name="likes" class="form-control" placeholder="likes" value="{{ $product->likes ?? old('likes') }}">
    @error('likes')
        <span role="alert">
            <strong style="color: red;">{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="form-group">
    <label>Image</label><br>
    <img src="{{ imageUrl($product->image_url ?? null) }}" class="mb-3 image">
    <input type="file" name="image" class="form-control-file">
    @error('image')
        <span role="alert">
            <strong style="color: red;">{{ $message }}</strong>
        </span>
    @enderror
</div>

<div>
    <input type="submit" value="Save">
</div>