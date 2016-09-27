<table class="table">
    <thead>
    <tr>
        <th>Title</th>
        <th>Description</th>
        <th>Priority</th>
        <th>Purchased by</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    @forelse($items as $item)
        <tr>
            <td>{{ $item->title }}</td>
            <td>{{ $item->description }}</td>
            <td>{{ ucfirst($item->priority) }}</td>
            <td>
                @if(empty($item->user))
                    <a href="/items/{{ $item->id }}/mark-purchased" class="btn btn-success btn-sm">Mark as Purchased</a>
                @else
                    {{ $item->user->name }}
                @endif
            </td>
            <td></td>
        </tr>
    @empty
        <tr colspan="5">
            <td>No items at this time.</td>
        </tr>
    @endforelse
    </tbody>
</table>
