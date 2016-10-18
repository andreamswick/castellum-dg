<table class="table">
    <thead>
    <tr>
        <th>Title</th>
        <th>Description</th>
        <th>Priority</th>
        <th>Purchased by</th>
        <th class="col-sm-2"></th>
    </tr>
    </thead>
    <tbody>
    @forelse($items as $item)
        <tr>
            <td>{{ $item->title }}</td>
            <td>{!! $item->description !!}</td>
            <td>{{ ucfirst($item->priority) }}</td>
            <td>
                @if(empty($item->user))
                    <a href="/items/{{ $item->id }}/purchased" class="btn btn-success btn-sm">Mark as Purchased</a>
                @else
                    {{ $item->user->name }}
                @endif
            </td>
            <td class="text-right">
                {{ Form::open([ 'method'  => 'delete', 'route' => [ 'items.destroy', $item->id ] ]) }}
                    <a href="/items/{{ $item->id }}" class="btn btn-default btn-sm"><i class="fa fa-eye"></i></a>
                    <a href="/items/{{ $item->id }}/edit" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></a>
                @role('admin')
                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                @endrole
                {{ Form::close() }}
            </td>
        </tr>
    @empty
        <tr colspan="5">
            <td>No items at this time.</td>
        </tr>
    @endforelse
    </tbody>
</table>
