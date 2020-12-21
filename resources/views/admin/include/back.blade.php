@if (Route::currentRouteName() !== null && Route::currentRouteName() !== 'home')
<a href="{{goBack()}}" class="btn btn-light mb-3">Back</a>
@endif