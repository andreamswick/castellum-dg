<table class="table">
    <thead>
    <tr>
        <td>Name</td>
        <td>Email</td>
        <td>Phone</td>
        @foreach($volunteer_categories as $category)
            <td>{{ $category }}</td>
        @endforeach
        <td>Details</td>
    </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
        <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->phone }}</td>
            @foreach($volunteer_categories as $id => $category)
                <td>{{ $user->volunteer_categories->contains($id) ? 'X' : ''  }}</td>
            @endforeach
            <td>{{ $user->volunteer_details }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
