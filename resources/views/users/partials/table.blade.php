<table class="table">
    <thead>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
    <tr>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->phone }}</td>
        <td class="text-right">
            <a href="/users/{{ $user->id }}" class="btn btn-default btn-sm"><i class="fa fa-eye"></i></a>

            @role('admin')
                @if(! $user->hasRole('admin'))
                    <a href="/users/{{ $user->id }}/make-admin" class="btn btn-warning btn-sm">Make Admin</a>
                @endif
            @endrole
        </td>
    </tr>
    @endforeach
    </tbody>
</table>
