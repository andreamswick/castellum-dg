<table class="table">
    <thead>
    <tr>
        <th>Name</th>
        <th>Start</th>
        <th>End</th>
        <th>People Going</th>
        <th class="col-sm-2"></th>
    </tr>
    </thead>
    <tbody>
    @forelse($visits as $visit)
        <tr>
            <td>{{ $visit->name }}</td>
            <td>{{ $visit->start }}</td>
            <td>{{ $visit->end }}</td>
            <td></td>
            <td class="text-right">
                {{ Form::open([ 'method'  => 'delete', 'route' => [ 'items.destroy', $visit->id ] ]) }}
                <a href="/items/{{ $visit->id }}" class="btn btn-default btn-sm"><i class="fa fa-eye"></i></a>
                <a href="/items/{{ $visit->id }}/edit" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></a>
                <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
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
