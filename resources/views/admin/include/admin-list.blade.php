<div class="card mt-4">
    <div class="card-header">
        User Options
    </div>
    <div class="card-body">
        @hasanyrole('admin|Super Admin')
        <a href="{{ route('register') }}" class="btn btn-success mb-4">Add User</a>
        @endhasanyrole
        <table class="table">
            <thead>
                <tr>
                    <th colspan="2">Name</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($users as $user)
                <tr>
                    <td>
                        {{ $user->name }}
                    </td>
                    <td>
                        <a href="{{ route('user-show', [$user]) }}" class="btn btn-success">Show</a>
                    </td>
                </tr>
                @empty
                    No Data Available
                @endforelse
            </tbody>
        </table>
    </div>
</div>