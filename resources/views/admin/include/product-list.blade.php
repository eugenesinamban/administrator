<div class="card">
    <div class="card-header">
        List of Product Types
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Page</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($types as $type)
                <tr>
                    <td>
                        <a href="{{ route('list', [$type->text]) }}">{{ ucfirst($type->text) }}</a>
                    </td>
                    <td>
                        <a href="http://{{ getSubdomain($type->text) }}" target="_blank" rel="noopener">{{ getSubdomain($type->text) }}</a>
                    </td>
                </tr>
                @empty
                    No Data Available
                @endforelse
            </tbody>
        </table>
    </div>
</div>