@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ $user->name }}
                    <div class="toolbox pull-right">
                        {{ Form::open([ 'method'  => 'delete', 'route' => [ 'users.destroy', $user->id ] ]) }}
                        @if($user->id === Auth::user()->id || Auth::user()->hasRole('admin'))
                            <a href="/users/{{ $user->id }}/edit" class="btn btn-warning btn-sm"><i
                                        class="fa fa-pencil"></i></a>
                        @endif

                        @role('admin')
                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                        @endrole
                        {{ Form::close() }}
                    </div>
                </div>

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
                    <tr>
                        <td>Volunteer Categories</td>
                        <td>
                            @if($user->volunteer_categories)
                                @foreach($user->volunteer_categories as $category)
                                    {{ $category->name }}{{ $loop->last ? '' : ',' }}
                                @endforeach
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td>Volunteer Details</td>
                        <td>{{ $user->volunteer_details }}</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ $user->name }}'s Items
                </div>
                <div class="panel-body">
                    @if($user->purchases !== null)
                        @if($profile || Auth::user()->hasRole('admin'))
                            <table class="table">
                                @foreach($user->purchases as $purchase)
                                    <tr>
                                        <td>{{ $purchase->item->title }}</td>
                                        <td>
                                            {{ Form::open([ 'method'  => 'delete', 'route' => [ 'purchases.destroy', $purchase->id ] ]) }}
                                            <a href="/purchases/{{ $purchase->id }}/edit"
                                               class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></a>
                                            <button type="submit" class="btn btn-danger btn-sm"><i
                                                        class="fa fa-trash"></i></button>
                                            {{ Form::close() }}
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        @else
                            <ul>
                                @foreach($user->purchases as $purchase)
                                    <li>{{ $purchase->item->title }}</li>
                                @endforeach
                            </ul>
                        @endif
                    @else
                        <p>No purchased items</p>
                    @endif
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
                            <li><a href="/visits/{{ $visit->id }}">{{ $visit->name }}
                                    on {{ $visit->start->format('m/d/Y') }}</a></li>
                        @empty
                            <li>No visits at this time</li>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
