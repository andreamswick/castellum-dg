@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ $visit->name }} Visit on {{ $visit->start->format('m/d/Y') }}
                    <div class="toolbox pull-right">
                        {{ Form::open([ 'method'  => 'delete', 'route' => [ 'visits.destroy', $visit->id ] ]) }}
                        <a href="/visits/{{ $visit->id }}/edit" class="btn btn-warning btn-sm"><i
                                    class="fa fa-pencil"></i></a>

                        @role('admin')
                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                        @endrole
                        {{ Form::close() }}
                    </div>
                </div>
                <div class="panel-body">
                    <table class="table">
                        <tr>
                            <td>Name</td>
                            <td>{{ $visit->name }}</td>
                        </tr>
                        <tr>
                            <td>Dates</td>
                            <td>
                                {{ $visit->start->format('m/d/Y g:i a') }} - {{ $visit->end->format('m/d/Y g:i a') }}
                                <span class="label label-default">{{ $visit->start->diffForHumans($visit->end, true) }}</span>
                            </td>
                        </tr>
                        <tr>
                            <td>People Going</td>
                            <td>
                                @foreach($visit->users as $user)
                                    {{ $user->name }}{{ !$loop->last ? ',' : '' }}
                                @endforeach
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    Comments
                </div>
                <div class="panel-body">
                    @if($comments->has('root'))
                        @include('comments.partials.list', ['list' => $comments['root']])
                    @endif
                </div>
                <div class="panel-footer">
                    @include('comments.partials.form')
                </div>
            </div>
        </div>
    </div>
@endsection
