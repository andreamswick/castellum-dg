<table class="table">
    <thead>
    <tr>
        <th>Name</th>
        <th>Start</th>
        <th>End</th>
        <th>Length</th>
        <th>People Going</th>
        <th class="col-sm-2"></th>
    </tr>
    </thead>
    <tbody>
    @forelse($visits as $visit)
        <tr>
            <td>{{ $visit->name }}</td>
            <td>{{ $visit->start->format('m/d/Y g:i a') }}</td>
            <td>{{ $visit->end->format('m/d/Y g:i a') }}</td>
            <td>{{ $visit->start->diffForHumans($visit->end, true)  }}</td>
            <td>
                @foreach($visit->users as $user)
                    {{ $user->name }}{{ !$loop->last ? ',' : '' }}
                @endforeach
            </td>
            <td class="text-right">
                {{ Form::open([ 'method'  => 'delete', 'route' => [ 'visits.destroy', $visit->id ] ]) }}
                <a href="/visits/{{ $visit->id }}" class="btn btn-default btn-sm"><i class="fa fa-eye"></i></a>
                <a href="/visits/{{ $visit->id }}/edit" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></a>
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
