@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ $user->name }}
                    <div class="toolbox pull-right">
                        {{ Form::open([ 'method'  => 'delete', 'route' => [ 'users.destroy', $user->id ] ]) }}
                        @if($user->id === Auth::user()->id)
                            <a href="/users/{{ $user->id }}/edit" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></a>
                        @endif

                        @role('admin')
                            <a href="/users/{{ $user->id }}/edit" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></a>
                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                        @endrole
                        {{ Form::close() }}
                    </div>
                </div>
                <div class="panel-body">
                    <table class="table">
                        <tr>
                            <td>Name</td>
                            <td>{{ $user->name }}</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>{{ $user->email }}</td>
                        </tr>
                        <tr>
                            <td>Phone</td>
                            <td>{{ $user->phone }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ $user->name }}'s Items
                </div>
                <div class="panel-body">
                    <ul>
                        @forelse($user->items as $item)
                            <li>{{ $item->title }}</li>
                        @empty
                            <li>No item's at this time</li>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ $user->name }}'s Visits
                </div>
                <div class="panel-body">
                    <ul>
                        @forelse($user->visits as $visit)
                            <li><a href="/visits/{{ $visit->id }}">{{ $visit->name }} on {{ $visit->start->format('m/d/Y') }}</a></li>
                        @empty
                            <li>No visits at this time</li>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
