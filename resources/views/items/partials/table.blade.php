<table class="table">
    <thead>
    <tr>
        <th>Title</th>
        <th>Description</th>
        <th>Priority</th>
        <th>Number Needed</th>
        <th>Purchased by</th>
        <th style="width: 130px;"></th>
    </tr>
    </thead>
    <tbody>
    @forelse($items as $item)
        <tr>
            <td>{{ $item->title }}</td>
            <td>{!! $item->description !!}</td>
            <td>{{ ucfirst($item->priority) }}</td>
            <td>{{ $item->needed() }} of {{ $item->quantity }}</td>
            <td>
                @if($item->purchases !== null)
                    <p>
                        @foreach($item->purchases as $purchase)
                            {{ $purchase->user->name }}
                            ({{ $purchase->quantity }})
                            {{ $loop->last ? '' : ',' }}
                        @endforeach
                    </p>
                @endif
                @if($item->quantity > $item->purchased())
                    <a href="/items/{{ $item->id }}/purchase" class="btn btn-success btn-sm">Mark as Purchased</a>
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
