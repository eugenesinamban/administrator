<div class="card mt-4">
    <div class="card-header">
        User Options
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Edit</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($users as $user)
                <tr>
                    <td>
                        {{ $user->name }}
                    </td>
                    <td>
                        <a href="{{ route('user-show', [$user]) }}" class="btn btn-success">Edit</a>
                    </td>
                </tr>
                @empty
                    No Data Available
                @endforelse
            </tbody>
        </table>
    </div>
</div>