<form action="{{ action("PhpTestController@store") }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="title">Title : </label>
        <input type="text" name="title" value="">
        @error('title')
        <span role="alert">
            <strong style="color: red;">{{ $message }}</strong>
        </span>
        @enderror   
    </div>


    <div class="form-group">
        <label for="name">Name : </label>
        <input type="text" name="name">
        @error('name')
        <span role="alert">
            <strong style="color: red;">{{ $message }}</strong>
        </span>
        @enderror   
    </div>

    <div class="form-group">
        <label for="message">Message : </label>
        <input type="text" name="message">
        @error('message')
        <span role="alert">
            <strong style="color: red;">{{ $message }}</strong>
        </span>
        @enderror   
    </div>

    <div class="form-group">
        <label for="password">Password : </label>
        <input type="password" name="password">
        @error('password')
        <span role="alert">
            <strong style="color: red;">{{ $message }}</strong>
        </span>
        @enderror   
    </div>

    <input type="submit">
</form>