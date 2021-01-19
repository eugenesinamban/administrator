<div class="form-group">
    <label>Name</label>
    <input type="text" name="name" class="form-control" placeholder="Enter Your Name" value="{{ $user->name ?? old('name')}}">
    @error('name')
        <span role="alert">
            <strong style="color: red;">{{ $message }}</strong>
        </span>
    @enderror
</div>

<h6>Roles : </h6>
<div class="form-group">
@foreach ($roles as $role)
    <div class="form-check form-check-inline">
        <input type="checkbox" class="form-check-input" name="{{ $role->name }}" value="{{ $role->name }}"@if (in_array($role->name, $userRoles))
            checked
        @endif>
        <label class="form-check-label">{{ $role->name }}</label>
    </div>
@endforeach
</div>


<div>
    <input class="btn btn-success" type="submit" value="Save">
</div>